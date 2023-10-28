<?php

namespace App\Http\Controllers;

use App\Models\ApplyLoker;
use App\Models\TahapanApply;

class ApplyLokerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applyLokersForAdmin = ApplyLoker::whereNotIn('id', function ($query) {
            $query->select('id_apply')->from('tahapan_apply');
        })
            ->whereHas('loker', function ($query) {
                $query->where('status', 'Sedang Seleksi');
            })
            ->get();

        $applyLokersForInterview = ApplyLoker::whereIn('id', function ($query) {
            $query->select('id_apply')
                ->from('tahapan_apply')
                ->where('id_tahapan', 1)
                ->where('nilai', 1);
        })
            ->whereHas('loker', function ($query) {
                $query->where('status', 'Sedang Seleksi');
            })
            ->get();

        return view('petugas.apply-loker.index', compact('applyLokersForAdmin', 'applyLokersForInterview'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $applyLoker = ApplyLoker::findOrFail($id);
        $tahapanApply = TahapanApply::where('id_apply', $applyLoker->id)
            ->where('id_tahapan', 1)
            ->where('nilai', 1)
            ->first();

        if ($tahapanApply) {
            return view('petugas.apply-loker.wawancara', compact('applyLoker'));
        } else {
            return view('petugas.apply-loker.administrasi', compact('applyLoker'));
        }
    }

}
