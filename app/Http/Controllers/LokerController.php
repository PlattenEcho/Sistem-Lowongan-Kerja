<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use App\Http\Requests\StoreLokerRequest;
use App\Http\Requests\UpdateLokerRequest;

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Loker $loker)
    {
        $loker = Loker::find($loker->id);
        return view('petugas.loker.detail', compact('loker'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Loker $loker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLokerRequest $request, Loker $loker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Loker $loker)
    {
        //
    }
}
