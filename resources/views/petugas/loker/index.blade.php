@extends('templates.dashboard-petugas')

@section('dashboard-content')
@if (session()->has('success'))
<div class="green-alert" role="alert">
    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg>
    <span class="sr-only">Info</span>
    <div>
        <span class="font-medium">Berhasil!</span> {{ session('success') }}
    </div>
</div>
@endif

@if (session()->has('deleteError'))
<div class="red-alert" role="alert">
    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg>
    <span class="sr-only">Info</span>
    <div>
        <span class="font-medium">Perhatian!</span> {{ session('deleteError') }}
    </div>
</div>
@endif

<h1 class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-gray-900 md:text-2xl lg:text-2xl dark:text-white">
    Daftar Lowongan Kerja</h1>

<div class="flex justify-center items-center h-full">
    <div class="bg-green-500 p-4 m-2">
        <p>Aktif: {{ $statusCounts['Aktif'] }}</p>
    </div>
    <div class="bg-yellow-500 p-4 m-2">
        <p>Sedang Seleksi: {{ $statusCounts['Sedang Seleksi'] }}</p>
    </div>
    <div class="bg-red-500 p-4 m-2">
        <p>Tutup: {{ $statusCounts['Tutup'] }}</p>
    </div>
</div>


<a href="{{ route('tambah-loker') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-3 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
    + Tambah Loker
</a>

<div class="relative mt-6 mr-2 overflow-x-auto shadow-md sm:rounded-lg">

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-3 py-3 text-left">
                    No.
                </th>
                <th scope="col" class="px-3 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Tipe Pekerjaan
                </th>
                <th scope="col" class="px-6 py-3">
                    Perusahaan
                </th>
                <th scope="col" class="px-4 py-3">
                    Status
                </th>
                <th scope="col" class="px-5 py-3 text-right">
                    Tindakan
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($daftarLoker as $loker)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->index + 1 }}
                </th>
                <th scope="row" class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <a href="{{ route('loker', $loker->id) }}" class="font-medium text-black-600 dark:text-black-500 hover:underline">
                        {{ $loker->nama }}</a>
                </th>
                <td class="px-6 py-4">
                    {{ $loker->tipe }}
                </td>
                <td class="px-6 py-4">
                    {{ $loker->perusahaan->nama }}
                </td>
                <td class="px-4 py-4">
                    {{ $loker->status }}
                </td>
                <td class="px-5 py-4 text-right">
                    <a href="{{ route('edit-loker', ['id' => $loker->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">Edit</a>
                    <a href="{{ route('konfirmasi-hapus-loker', ['id' => $loker->id]) }}" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection