@extends('templates.dashboard-petugas')

@section('dashboard-content')
    <h1
        class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-gray-900 md:text-2xl lg:text-2xl dark:text-white">
        Daftar Lowongan Kerja</h1>
    <a href="{{ route('tambah-loker') }}"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-3 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
        + Tambah Loker
    </a>

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
                        Tipe Pekerjaan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Perusahaan
                    </th>
                    <th scope="col" class="px-6 py-3 text-right">
                        Action
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($daftarLoker as $loker)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->index + 1 }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="{{ route('loker', $loker->id) }}"
                                class="font-medium text-black-600 dark:text-black-500 hover:underline">
                                {{ $loker->nama }}</a>
                        </th>
                        <td class="px-6 py-4">
                            {{ $loker->tipe }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $loker->perusahaan->nama }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('edit-loker', ['id' => $loker->id]) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
