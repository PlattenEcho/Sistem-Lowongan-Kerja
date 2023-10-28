<?php

namespace App\Http\Controllers;

use App\Models\TahapanApply;
use App\Models\ApplyLoker;
use App\Http\Requests\StoreTahapanApplyRequest;
use App\Http\Requests\UpdateTahapanApplyRequest;

class TahapanApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTahapanApplyRequest $request, $id)
    {
        $applyLoker = ApplyLoker::findOrFail($id);
        $status = $request->input('status');
        TahapanApply::create([
            'id_apply' => $applyLoker->id,
            'id_tahapan' => 1,
            'nilai' => $status,
            'tgl_update' => now(),
        ]);

        return redirect()->route('apply-loker.index')->with('success', 'Tahapan Apply Loker berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TahapanApply $tahapanApply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TahapanApply $tahapanApply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTahapanApplyRequest $request, $id)
    {
        $applyLoker = ApplyLoker::findOrFail($id);
        $tahapanApply = $applyLoker->tahapanApply;
        $status = $request->input('status');

        $tahapanApply->id_tahapan = 2;
        $tahapanApply->nilai = $status;
        $tahapanApply->tgl_update = now();
        $tahapanApply->save();

        $loker = $applyLoker->loker;
        $tahapanApplyCount = TahapanApply::whereIn('id_apply', $loker->appliedFor->pluck('id'))
            ->count();

        $applyLokerCount = $loker->appliedFor->count();

        if ($tahapanApplyCount === $applyLokerCount) {
            // If the counts match, update tgl_tutup loker
            $loker->tgl_tutup = now();
            $loker->status = 'Tutup';
            $loker->save();
        }

        return redirect()->route('apply-loker.index')->with('success', 'Tahapan Apply Loker berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TahapanApply $tahapanApply)
    {
        //
    }
}
