<?php

namespace App\Http\Controllers;

use App\Models\TahapanApply;
use App\Models\ApplyLoker;
use App\Http\Requests\StoreTahapanApplyRequest;
use App\Http\Requests\UpdateTahapanApplyRequest;

class TahapanApplyController extends Controller
{

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

        $loker = $applyLoker->loker;
        $applyLokerCount = $loker->appliedFor->count();
        $tahapanApplyCount = $loker->appliedFor()
            ->whereHas('tahapanApply', function ($query) {
                $query->where(function ($subQuery) {
                    $subQuery->where('id_tahapan', 2)
                        ->whereIn('nilai', [0, 1])
                        ->orWhere(function ($subQuery) {
                            $subQuery->where('id_tahapan', 1)
                                ->where('nilai', 0);
                        });
                });
            })
            ->count();

        // dd($tahapanApplyCount, $applyLokerCount);

        if ($tahapanApplyCount === $applyLokerCount) {
            // If the counts match, update tgl_tutup loker
            $loker->tgl_tutup = now();
            $loker->status = 'Tutup';
            $loker->save();
        }

        return redirect()->route('apply-loker.index')->with('success', 'Tahapan Apply Loker berhasil disimpan.');
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
        $applyLokerCount = $loker->appliedFor->count();
        $tahapanApplyCount = $loker->appliedFor()
            ->whereHas('tahapanApply', function ($query) {
                $query->where(function ($subQuery) {
                    $subQuery->where('id_tahapan', 2)
                        ->whereIn('nilai', [0, 1])
                        ->orWhere(function ($subQuery) {
                            $subQuery->where('id_tahapan', 1)
                                ->where('nilai', 0);
                        });
                });
            })
            ->count();

        // dd($tahapanApplyCount, $applyLokerCount);

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
}
