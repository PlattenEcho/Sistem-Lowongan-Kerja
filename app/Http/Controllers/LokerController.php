<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Loker;
use App\Models\ApplyLoker;
use App\Models\Perusahaan;
use App\Http\Requests\StoreLokerRequest;
use App\Http\Requests\UpdateLokerRequest;

class LokerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getStatusCounts($status)
    {
        $statusCounts = Loker::where('status', $status)->count();

        return $statusCounts;
    }


    public function index()
    {
        $daftarLoker = Loker::with('perusahaan')
            ->orderBy('status', 'asc')
            ->get();

        $countAktif = $this->getStatusCounts('Aktif');
        $countSedangSeleksi = $this->getStatusCounts('Sedang Seleksi');
        $countTutup = $this->getStatusCounts('Tutup');

        return view('petugas.loker.index', compact('daftarLoker', 'countAktif', 'countSedangSeleksi', 'countTutup'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('petugas.loker.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLokerRequest $request)
    {
        $data = $request->validated();

        $perusahaan = Perusahaan::where('nama', $data['perusahaan'])->first();
        if (!$perusahaan) {
            $perusahaan = Perusahaan::create(['nama' => $data['perusahaan']]);
        }

        $data['id_perusahaan'] = $perusahaan->id;
        Loker::create($data);

        return redirect()->route('daftar-loker')->with('success', 'Lowongan pekerjaan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $loker = Loker::findOrFail($id);
        $applicants = ApplyLoker::where('id_loker', $id)->get();
        return view('petugas.loker.detail', compact('loker', 'applicants'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $loker = Loker::findOrFail($id);
        return view('petugas.loker.edit', compact('loker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLokerRequest $request, $id)
    {
        $data = $request->validated();
        $loker = Loker::findOrFail($id);

        $perusahaan = Perusahaan::where('nama', $data['perusahaan'])->first();
        if (!$perusahaan) {
            $perusahaan = Perusahaan::create(['nama' => $data['perusahaan']]);
        }

        $data['id_perusahaan'] = $perusahaan->id;

        $tglAktif = Carbon::parse($data['tgl_aktif']);
        if ($tglAktif->isPast()) {
            $loker->status = 'Sedang Seleksi';
        }

        $loker->update($data);
        return redirect()->route('daftar-loker')->with('success', 'Lowongan pekerjaan berhasil diperbarui.');
    }


    public function confirmDelete($id)
    {
        $loker = Loker::findOrFail($id);

        if ($loker->status == 'Tutup' || $loker->appliedFor->count() == 0) {
            return view('petugas.loker.confirm-delete', compact('loker'));
        } else {
            return back()->with('deleteError', 'Anda tidak boleh menghapus lowongan pekerjaan yang belum ditutup atau sedang seleksi!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $loker = Loker::findOrFail($id);
        $loker->delete();

        return redirect()->route('daftar-loker')->with('success', 'Lowongan pekerjaan berhasil dihapus.');
    }
}
