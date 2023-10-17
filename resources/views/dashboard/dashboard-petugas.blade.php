@extends('templates.main')

@section('body')
    <!-- Sidebar -->
    <div class="flex h-screen bg-gray-200">
        <div class="w-64 bg-gray-800 p-4">
            <div class="text-white text-lg font-semibold mb-4">Dashboard</div>
            <ul class="text-gray-300">
                <li class="py-2 px-4 hover:bg-gray-700"> <a href="{{ url('kosongan') }}">Data Lowongan</a> </li>
                <li class="py-2 px-4 hover:bg-gray-700"> <a href="{{ url('kosongan') }}">Data Pencaker</a> </li>
                <!-- Tambahkan menu sesuai kebutuhan Anda -->
            </ul>
            <form action="/logout" method="POST" class="mt-4">
                @csrf
                <button type="submit"
                    class="inline-flex justify-center items-center w-full py-3 px-4 text-base font-medium text-center text-white rounded-lg bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                    Logout
                </button>
            </form>
        </div>
        <!-- Content Area -->
        <div class="flex-1 flex flex-col justify-center items-center">
            <h1 class="text-2xl font-semibold mb-4">Hai Kamu {{ auth()->user()->name }}</h1>
            <p class="text-5xl">&#x1F595</p>
        </div>
    </div>
@endsection
