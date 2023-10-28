@extends('templates.dashboard-petugas')

@section('dashboard-content')
    <div class="container">
        @if (session()->has('success'))
            <div class="green-alert" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">Berhasil!</span> {{ session('success') }}
                </div>
            </div>
        @endif

        <h1 class="jumbotron-h1">
            Daftar Apply Loker Belum Seleksi</h1>

        <div class="relative mt-6 mr-2 overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="head-table">
                    <tr>
                        <th scope="col" class="px-6 py-3">No.</th>
                        <th scope="col" class="px-6 py-3">Nama Pekerjaan</th>
                        <th scope="col" class="px-6 py-3">Perusahaan</th>
                        <th scope="col" class="px-6 py-3">Nama Pencari Kerja</th>
                        <th scope="col" class="px-6 py-3">Tanggal Apply</th>
                        <th scope="col" class="px-6 py-3">Menunggu Seleksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $index = 0;
                    @endphp
                    @foreach ($applyLokersForAdmin as $applyLoker)
                        <tr class="row-table">
                            <td class="px-6 py-4">{{ ++$index }}</td>
                            <td class="px-6 py-4">{{ $applyLoker->loker->nama }}</td>
                            <td class="px-6 py-4">{{ $applyLoker->loker->perusahaan->nama }}</td>
                            <td class="px-6 py-4">{{ $applyLoker->pencaker->nama }}</td>
                            <td class="px-6 py-4">{{ $applyLoker->tgl_apply }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('apply-loker.show', ['id' => $applyLoker->id]) }}"
                                    class="blue-hyperlink">Administrasi</a>
                            </td>
                        </tr>
                    @endforeach
                    @foreach ($applyLokersForInterview as $applyLoker)
                        <tr class="row-table">
                            <td class="px-6 py-4">{{ ++$index }}</td>
                            <td class="px-6 py-4">{{ $applyLoker->loker->nama }}</td>
                            <td class="px-6 py-4">{{ $applyLoker->loker->perusahaan->nama }}</td>
                            <td class="px-6 py-4">{{ $applyLoker->pencaker->nama }}</td>
                            <td class="px-6 py-4">{{ $applyLoker->tgl_apply }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('apply-loker.show', ['id' => $applyLoker->id]) }}"
                                    class="blue-hyperlink">Wawancara</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
