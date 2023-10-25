<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use App\Http\Requests\StoreLokerRequest;
use App\Http\Requests\UpdateLokerRequest;
use App\Models\Perusahaan;

class LokerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $daftarLoker = Loker::with('perusahaan')->get();
        return view('petugas.loker.index', compact('daftarLoker'));
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
        return view('petugas.loker.detail', compact('loker'));
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

        $loker->update($data);
        return redirect()->route('daftar-loker')->with('success', 'Lowongan pekerjaan berhasil diperbarui.');
    }


    public function confirmDelete($id)
    {
        $loker = Loker::findOrFail($id);
        return view('petugas.loker.confirm-delete', compact('loker'));
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
