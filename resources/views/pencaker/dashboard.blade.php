@extends('templates.main')

@section('body')
    <h1 class="text-2xl font-semibold mb-4">Hai, Pencari Kerja {{ auth()->user()->name }}</h1>
    <h1 class="text-2xl font-semibold mb-4">Sayang sekali sistem ini tidak menyediakan sistem untuk pencari kerja</h1>
    {{-- <p class="text-5xl">&#x1F595;</p> --}}
    <form action="/logout" method="post">
        @csrf
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Log out
        </button>
    </form>
@endsection
