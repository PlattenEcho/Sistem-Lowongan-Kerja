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
    public function index() {
        $applyLokers = ApplyLoker::whereNotIn('id', function($query) {
            $query->select('id_apply')->from('tahapan_apply');
        })->get();
        
        return view('petugas.apply-loker.index', compact('applyLokers'));
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
    public function show(ApplyLoker $applyLoker)
    {
        //
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
