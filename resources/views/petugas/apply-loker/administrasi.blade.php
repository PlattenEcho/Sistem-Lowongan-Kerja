@extends('templates.dashboard-petugas')

@section('dashboard-content')
    <div class="container">
        <h1
            class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-gray-900 md:text-2xl lg:text-2xl dark:text-white">
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

        <form action="{{ route('apply-loker.store-tahapan', ['id' => $applyLoker->id]) }}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Pencari
                    Kerja</label>
                <input type="text" id="name" value="{{ $applyLoker->pencaker->nama }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-4"
                    required disabled>
            </div>
            <div class="mb-6">
                <label for="gender" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Jenis
                    Kelamin</label>
                <input type="input" id="gender" value="{{ $applyLoker->pencaker->jenis_kelamin }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-4"
                    required disabled>
            </div>
            <div class="mb-6">
                <label for="telpon" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">No.
                    Telepon</label>
                <input type="input" id="telpon" value="{{ $applyLoker->pencaker->no_telp }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-4"
                    required disabled>
            </div>
            <div class="mb-6">
                <label for="job" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan yang
                    Dilamar</label>
                <input type="input" id="job" value="{{ $applyLoker->loker->nama }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-4"
                    required disabled>
            </div>
            <div class="mb-6">
                <label for="type" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Tipe
                    Pekerjaan</label>
                <input type="input" id="type" value="{{ $applyLoker->loker->tipe }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-4"
                    required disabled>
            </div>
            <div class="mb-6">
                <label for="cptelpon" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">No. Telepon
                    CP</label>
                <input type="input" id="cptelpon" value="{{ $applyLoker->loker->no_telp_cp }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-4"
                    required disabled>
            </div>
            <button type="submit" name="status" value="1"
                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Lulus
                Administrasi
            </button>
            <button type="submit" name="status" value="0"
                class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Tidak
                Lulus Administrasi
            </button>

        </form>
    </div>
@endsection
