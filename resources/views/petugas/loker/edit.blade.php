@extends('templates.dashboard-petugas')

@section('dashboard-content')
    <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Ubah Lowongan Kerja</h2>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <form action="/daftar-loker/{$loker->id}/edit-loker" method="PUT">
                @csrf
                @method('PUT')
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="nama"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" name="nama" id="nama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Desainer" value="{{ old('nama', $loker->nama) }}">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="tipe"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe</label>
                        <select name="tipe" id="tipe"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="" selected disabled>Pilih Tipe</option>
                            <option value="Penuh Waktu" {{ $loker->tipe == 'Penuh Waktu' ? 'selected' : '' }}>
                                Penuh Waktu
                            </option>
                            <option value="Paruh Waktu" {{ $loker->tipe == 'Paruh Waktu' ? 'selected' : '' }}>
                                Paruh Waktu
                            </option>
                            <option value="Lepas Waktu" {{ $loker->tipe == 'Lepas Waktu' ? 'selected' : '' }}>
                                Lepas Waktu
                            </option>
                            <option value="Magang" {{ $loker->tipe == 'Magang' ? 'selected' : '' }}>
                                Magang
                            </option>
                        </select>
                    </div>

                    <div class="w-full">
                        <label for="usia_min" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usia
                            Minimal</label>
                        <input type="number" name="usia_min" id="usia_min"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="17" value="{{ old('usia_min', $loker->usia_min) }}">
                    </div>
                    <div class="w-full">
                        <label for="usia_max" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usia
                            Maksimal</label>
                        <input type="number" name="usia_max" id="usia_max"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="50" value="{{ old('usia_max', $loker->usia_max) }}">
                    </div>
                    <div class="w-full">
                        <label for="gaji_min" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gaji
                            Minimal</label>
                        <input type="number" name="gaji_min" id="gaji_min"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="1000000" value="{{ old('gaji_min', $loker->gaji_min) }}">
                    </div>
                    <div class="w-full">
                        <label for="gaji_max" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gaji
                            Maksimal</label>
                        <input type="number" name="gaji_max" id="gaji_max"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="30000000" value="{{ old('gaji_max', $loker->gaji_max) }}">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="nama_cp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Narahubung</label>
                        <input type="text" name="nama_cp" id="nama_cp"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ old('nama_cp', $loker->nama_cp) }}">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email_cp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                            Narahubung</label>
                        <input type="email" name="email_cp" id="email_cp"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ old('email_cp', $loker->email_cp) }}">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="no_telp_cp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                            Telepon Narahubung</label>
                        <input type="text" name="no_telp_cp" id="no_telp_cp"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ old('no_telp_cp', $loker->no_telp_cp) }}">
                    </div>
                    <div class="w-full">
                        <label for="tgl_aktif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Batas
                            Lamar</label>
                        <input type="date" name="tgl_aktif" id="tgl_aktif"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ old('tgl_aktif', $loker->tgl_aktif) }}">
                    </div>
                    <div class="w-full">
                        <label for="tgl_tutup" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Batas
                            Tutup</label>
                        <input type="date" name="tgl_tutup" id="tgl_tutup"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ old('tgl_tutup', $loker->tgl_tutup) }}">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="status"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                        <select name="status" id="status"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="" selected disabled>Pilih Status</option>
                            <option value="Aktif" {{ $loker->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                            <option value="Sedang Seleksi" {{ $loker->status == 'Sedang Seleksi' ? 'selected' : '' }}>
                                Sedang Seleksi</option>
                            <option value="Tutup" {{ $loker->status == 'Tutup' ? 'selected' : '' }}>Tutup</option>
                        </select>
                    </div>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-5 mr-2 mb-3 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Simpan Perubahan </button>
            </form>
        </div>
    </section>
@endsection
