@extends('templates.dashboard')

@section('sidebar-menu')
@endsection

@section('content')
    <h1 class="text-2xl font-semibold mb-4">Hai Kamu {{ auth()->user()->name }}</h1>
    <h1 class="text-2xl font-semibold mb-4">Kosong Coy</h1>
    <p class="text-5xl">&#x1F595;</p>
@endsection