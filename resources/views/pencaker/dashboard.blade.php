@extends('templates.main')

@section('body')
<div class="border border-2 border-dark p-4" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white;">
    <h1 class="text-2xl font-semibold mb-4 text-center">Hai {{ auth()->user()->name }}</h1>
    <h1 class="text-2xl font-semibold mb-4 text-center">Maaf Sistem ini Tidak Melayani Pencari Kerja</h1>
    <form action="/logout" method="post">
        @csrf
        <button type="submit" class="text-white bg-red-500 hover:bg-danger-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">
            Log out
        </button>
    </form>
</div>
@endsection