<?php

namespace App\Http\Controllers;

use App\Models\ApplyLoker;
use App\Http\Requests\StoreApplyLokerRequest;
use App\Http\Requests\UpdateApplyLokerRequest;

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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreApplyLokerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $applyLoker = ApplyLoker::findOrFail($id);
        return view('petugas.apply-loker.administrasi', compact('applyLoker'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ApplyLoker $applyLoker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApplyLokerRequest $request, ApplyLoker $applyLoker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ApplyLoker $applyLoker)
    {
        //
    }
}
