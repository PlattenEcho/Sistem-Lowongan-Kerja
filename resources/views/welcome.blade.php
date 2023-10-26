@extends('templates.main')

@section('body')
<section class="bg-white dark:bg-gray-900">
    <div class="jumbotron-content-div">
        <h1 class="jumbotron-h1">SISCAKER</h1>
        <p class="jumbotron-p">Topik 4: Sistem Seleksi Lowongan Kerja (nomor 6 sampai 10)</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            <a href="/login" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Login Page
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
        @auth
        <br>
        <a href="/dashboard" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
            Logged as {{ auth()->user()->name}}
        </a>
        @else
        <br>
        <h1>PBP Mini Project</h1>
        @endauth
    </div>
</section>
@endsection