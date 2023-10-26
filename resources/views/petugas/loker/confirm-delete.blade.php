@extends('templates.dashboard-petugas')

@section('dashboard-content')
    <h1
        class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-gray-900 md:text-2xl lg:text-2xl dark:text-white">
        Yakin ingin hapus lowongan kerja ini?
    </h1>
    <a href="{{ route('daftar-loker') }}"
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

    <section class="bg-white dark:bg-gray-900 relative mt-auto mx-auto overflow-x-auto sm:rounded-lg">
        <div class="py-4 px-auto mx-px max-w-full lg:py-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="sm:col-span-2">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <p>{{ $loker->nama }}</p>
                </div>
                <div class="sm:col-span-2">
                    <label for="tipe" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe</label>
                    <p>{{ $loker->tipe }}</p>
                </div>

                <div class="w-full">
                    <label for="usia_min" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usia
                        Minimal</label>
                    <p>{{ $loker->usia_min }}</p>

                </div>
                <div class="w-full">
                    <label for="usia_max" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usia
                        Maksimal</label>
                    <p>{{ $loker->usia_max }}</p>
                </div>
                <div class="w-full">
                    <label for="gaji_min" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gaji
                        Minimal</label>
                    <p>{{ $loker->gaji_min }}</p>
                </div>
                <div class="w-full">
                    <label for="gaji_max" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gaji
                        Maksimal</label>
                    <p>{{ $loker->gaji_max }}</p>
                </div>
                <div class="sm:col-span-2">
                    <label for="perusahaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Perusahaan
                    </label>
                    <p>{{ $loker->perusahaan->nama }}</p>
                </div>
                <div class="sm:col-span-2">
                    <label for="nama_cp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Narahubung</label>
                    <p>{{ $loker->nama_cp }}</p>
                </div>
                <div class="sm:col-span-2">
                    <label for="email_cp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                        Narahubung</label>
                    <p>{{ $loker->email_cp }}</p>
                </div>
                <div class="sm:col-span-2">
                    <label for="no_telp_cp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                        Telepon Narahubung</label>
                    <p>{{ $loker->no_telp_cp }}</p>
                </div>
                <div class="sm:col-span-2">
                    <label for="tgl_update" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                        Update</label>
                    <p>{{ date('d-m-Y', strtotime($loker->tgl_update)) }}</p>
                </div>
                <div class="sm:col-span-2">
                    <label for="tgl_aktif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Batas
                        Lamar</label>
                    <p>{{ date('d-m-Y', strtotime($loker->tgl_aktif)) }}</p>
                </div>
                <div class="sm:col-span-2">
                    <label for="tgl_tutup" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Batas
                        Tutup</label>
                    <p>{{ date('d-m-Y', strtotime($loker->tgl_tutup)) }}</p>
                </div>
                <div class="sm:col-span-2">
                    <label for="status"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                    <p>{{ $loker->status }}</p>
                </div>
                <form action="{{ route('hapus-loker', ['id' => $loker->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 -mt-1 mr-2 mb-3 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">
                        Hapus Loker
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
