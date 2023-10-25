@extends('templates.dashboard-petugas')

@section('dashboard-content')
    <h1
        class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-gray-900 md:text-2xl lg:text-2xl dark:text-white">
        Edit Lowongan Kerja
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
            <form action="{{ route('ubah-loker', ['id' => $loker->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="sm:col-span-2">
                        <label for="nama"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" name="nama" id="nama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Contoh : Desainer" value="{{ old('nama', $loker->nama) }}">
                        @error('nama')
                            <div class="red-alert" role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Perhatian!</span> {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="tipe"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe</label>
                        <select name="tipe" id="tipe"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="" selected disabled>-- Pilih Tipe --</option>
                            <option value="Penuh Waktu" @selected(old('tipe', $loker->tipe) == 'Penuh Waktu')>Penuh Waktu</option>
                            <option value="Paruh Waktu" @selected(old('tipe', $loker->tipe) == 'Paruh Waktu')>Paruh Waktu</option>
                            <option value="Lepas Waktu" @selected(old('tipe', $loker->tipe) == 'Lepas Waktu')>Lepas Waktu</option>
                            <option value="Magang" @selected(old('tipe', $loker->tipe) == 'Magang')>Magang</option>
                        </select>
                        @error('tipe')
                            <div class="red-alert" role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Perhatian!</span> {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>

                    <div class="w-full">
                        <label for="usia_min" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usia
                            Minimal</label>
                        <input type="number" name="usia_min" id="usia_min"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Contoh : 17" min="17" max="70"
                            value="{{ old('usia_min', $loker->usia_min) }}">
                        @error('usia_min')
                            <div class="red-alert" role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Perhatian!</span> {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="usia_max" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usia
                            Maksimal</label>
                        <input type="number" name="usia_max" id="usia_max"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Contoh : 70" min="17" max="70"
                            value="{{ old('usia_max', $loker->usia_max) }}">
                        @error('usia_max')
                            <div class="red-alert" role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Perhatian!</span> {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="gaji_min" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gaji
                            Minimal</label>
                        <input type="number" name="gaji_min" id="gaji_min"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Contoh : 1000000" min="0"
                            value="{{ old('gaji_min', $loker->gaji_min) }}">
                        @error('gaji_min')
                            <div class="red-alert" role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Perhatian!</span> {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="gaji_max" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gaji
                            Maksimal</label>
                        <input type="number" name="gaji_max" id="gaji_max"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder=" Contoh : 30000000" min="0"
                            value="{{ old('gaji_max', $loker->gaji_max) }}">
                        @error('gaji_max')
                            <div class="red-alert" role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Perhatian!</span> {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="perusahaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Perusahaan
                        </label>
                        <input type="text" name="perusahaan" id="perusahaan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Contoh : HYBE" value="{{ old('perusahaan', $loker->perusahaan->nama) }}">
                        @error('perusahaan')
                            <div class="red-alert" role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Perhatian!</span> {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="nama_cp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Narahubung</label>
                        <input type="text" name="nama_cp" id="nama_cp"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Contoh : Kang Haerin" value="{{ old('nama_cp', $loker->nama_cp) }}">
                        @error('nama_cp')
                            <div class="red-alert" role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Perhatian!</span> {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email_cp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                            Narahubung</label>
                        <input type="email" name="email_cp" id="email_cp"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Contoh : newjeans@gmail.com" value="{{ old('email_cp', $loker->email_cp) }}">
                        @error('email_cp')
                            <div class="red-alert" role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Perhatian!</span> {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="no_telp_cp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                            Telepon Narahubung</label>
                        <input type="text" name="no_telp_cp" id="no_telp_cp"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Contoh : 0812XXXXXXXX" value="{{ old('no_telp_cp', $loker->no_telp_cp) }}">
                        @error('no_telp_cp')
                            <div class="red-alert" role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Perhatian!</span> {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="tgl_aktif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Batas
                            Lamar</label>
                        <input type="date" name="tgl_aktif" id="tgl_aktif"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ old('tgl_aktif', $loker->tgl_aktif) }}">
                        @error('tgl_aktif')
                            <div class="red-alert" role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Perhatian!</span> {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="tgl_tutup" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Batas
                            Tutup</label>
                        <input type="date" name="tgl_tutup" id="tgl_tutup"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ old('tgl_tutup', $loker->tgl_tutup) }}">
                        @error('tgl_tutup')
                            <div class="red-alert" role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Perhatian!</span> {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    {{-- <div class="sm:col-span-2">
                        <label for="status"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                        <select name="status" id="status"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="" selected disabled>-- Pilih Status --</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Sedang Seleksi">Sedang Seleksi</option>
                            <option value="Tutup">Tutup</option>
                        </select>
                    </div> --}}
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-5 mr-2 mb-3 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Edit Loker
                </button>
            </form>
        </div>
    </section>
@endsection
