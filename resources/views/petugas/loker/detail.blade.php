@extends('templates.dashboard-petugas')

@section('dashboard-content')
    <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Detail Lowongan Kerja</h2>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <form action="" method="GET">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="nama"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" name="nama" id="nama"
                            class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ $loker->nama }}" @disabled(true)>
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
                        <label for="tgl_aktif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Batas
                            Lamar</label>
                        <input type="date" name="tgl_aktif" id="tgl_aktif" value="{{ $loker->tgl_aktif }}"
                            @disabled(true)
                            class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="w-full">
                        <label for="tgl_tutup" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Batas
                            Tutup</label>
                        <input type="date" name="tgl_tutup" id="tgl_tutup" value="{{ $loker->tgl_tutup }}"
                            @disabled(true)
                            class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="w-full">
                        <label for="status"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                        <input type="text" name="status" id="status" value="{{ $loker->status }}"
                            @disabled(true)
                            class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>

            </form>
        </div>
    </section>
@endsection
