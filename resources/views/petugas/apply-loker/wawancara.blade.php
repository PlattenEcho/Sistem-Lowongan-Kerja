@extends('templates.dashboard-petugas')

@section('dashboard-content')
    <div class="container">
        <h1 class="jumbotron-h1">
            Detail Apply Loker
        </h1>
        <a href="{{ route('apply-loker.index') }}"
            class="text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm inline-block px-3 py-2.5 mx-auto mb-3 dark:bg-white-600 dark:hover-bg-white-700 focus:outline-none dark:focus:ring-white-800 w-full"
            style="max-width: 110px;">
            <div class="flex flex-row items-center justify-center">
                <svg class="w-4 h-3 text-white-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13" />
                </svg>
                <span class="ml-0.5 ">Kembali</span>
            </div>
        </a>

        <form action="{{ route('apply-loker.update-tahapan', ['id' => $applyLoker->id]) }}" method="POST">
            @csrf
            @method('PUT')

            @include('templates.detail-pencaker')

            <button type="submit" name="status" value="1" class="green-button">Lulus
                Wawancara
            </button>
            <button type="submit" name="status" value="0" class="red-button">Tidak
                Lulus Wawancara
            </button>
        </form>
    </div>
@endsection
