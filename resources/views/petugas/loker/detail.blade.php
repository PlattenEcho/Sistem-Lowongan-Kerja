@extends('templates.dashboard-petugas')

@section('dashboard-content')
    <h1
        class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-gray-900 md:text-2xl lg:text-2xl dark:text-white">
        Detail Lowongan Kerja
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
            <form action="" method="">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Pekerjaan</label>
                        <input type="text" name="nama" id="nama"
                            class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ $loker->nama }}" @disabled(true)>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="nama_perusahaan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Perusahaan</label>
                        <input type="text" name="nama_perusahaan" id="nama_perusahaan"
                            class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ $loker->perusahaan->nama }}" @disabled(true)>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="tipe"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe</label>
                        <input type="text" name="tipe" id="tipe"
                            class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ $loker->tipe }}" @disabled(true)>
                    </div>

                    <div class="w-full">
                        <label for="usia_min" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usia
                            Minimal</label>
                        <input type="number" name="usia_min" id="usia_min"
                            class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ $loker->usia_min }}" @disabled(true)>
                    </div>
                    <div class="w-full">
                        <label for="usia_max" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usia
                            Maksimal</label>
                        <input type="number" name="usia_max" id="usia_max"
                            class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ $loker->usia_max }}" @disabled(true)>
                    </div>
                    <div class="w-full">
                        <label for="gaji_min" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gaji
                            Minimal</label>
                        <input type="number" name="gaji_min" id="gaji_min"
                            class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ $loker->gaji_min }}" @disabled(true)>
                    </div>
                    <div class="w-full">
                        <label for="gaji_max" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gaji
                            Maksimal</label>
                        <input type="number" name="gaji_max" id="gaji_max"
                            class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ $loker->gaji_max }}" @disabled(true)>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="nama_cp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Narahubung</label>
                        <input type="text" name="nama_cp" id="nama_cp" value="{{ $loker->nama_cp }}"
                            @disabled(true)
                            class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email_cp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                            Narahubung</label>
                        <input type="email" name="email_cp" id="email_cp" value="{{ $loker->email_cp }}"
                            @disabled(true)
                            class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="no_telp_cp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                            Telepon Narahubung</label>
                        <input type="text" name="no_telp_cp" id="no_telp_cp" value="{{ $loker->no_telp_cp }}"
                            @disabled(true)
                            class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="w-full">
                        <label for="tgl_update" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Tanggal Update
                        </label>
                        <input type="date" name="tgl_update" id="tgl_update" value="{{ $loker->tgl_update }}"
                            @disabled(true)
                            class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="w-full">
                        <label for="tgl_aktif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Batas
                            Lamar</label>
                        <input type="date" name="tgl_aktif" id="tgl_aktif" value="{{ $loker->tgl_aktif }}"
                            @disabled(true)
                            class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="status"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                        <input type="text" name="status" id="status" value="{{ $loker->status }}"
                            @disabled(true)
                            class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    @if ($loker->status == 'Tutup')
                        <div class="sm:col-span-2">
                            <label for="tgl_tutup" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Tanggal Tutup
                            </label>
                            <input type="date" name="tgl_tutup" id="tgl_tutup" value="{{ $loker->tgl_tutup }}"
                                @disabled(true)
                                class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </div>
                    @endif
            </form>
        </div>
    </section>

    <h1
        class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-gray-900 md:text-2xl lg:text-2xl dark:text-white">
        Daftar Pencari Kerja
    </h1>
    <div class="relative mt-6 mr-2 overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-3 py-3 text-left">
                        No.
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal Apply
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Seleksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applicants as $applicant)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->index + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="#" class="font-medium text-black-600 dark:text-black-500 hover:underline">
                                {{ $applicant->pencaker->nama }}</a>
                        </th>
                        <td class="px-6 py-4">
                            {{ $applicant->tgl_apply }}
                        </td>
                        <td class="px-6 py-4">
                            @if ($applicant->tahapanApply->isNotEmpty())
                                @foreach ($applicant->tahapanApply as $tahapan)
                                    @if ($tahapan->nilai == 0)
                                        Gagal
                                    @elseif ($tahapan->nilai == 1)
                                        Lolos Tahap Administrasi
                                    @elseif ($tahapan->nilai == 2)
                                        Lolos Tahap Wawancara
                                    @else
                                        Belum Dinilai
                                    @endif
                                @endforeach
                            @else
                                Belum Dinilai
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
