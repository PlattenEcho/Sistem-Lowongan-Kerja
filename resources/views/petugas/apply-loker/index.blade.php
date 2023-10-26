@extends('templates.dashboard-petugas')

@section('dashboard-content')
<div class="container">
    <h1 class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-gray-900 md:text-2xl lg:text-2xl dark:text-white">
    Daftar Apply Loker Belum Seleksi</h1>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">No.</th>
                <th scope="col" class="px-6 py-3">Nama Pekerjaan</th>
                <th scope="col" class="px-6 py-3">Nama Pencari Kerja</th>
                <th scope="col" class="px-6 py-3">Tanggal Apply</th>
                <th scope="col" class="px-6 py-3">Seleksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($applyLokers as $applyLoker)
                <tr class="row-table">
                    <td class="px-6 py-4">{{ $loop->index + 1 }}</td>
                    <td class="px-6 py-4">{{ $applyLoker->loker->nama }}</td>
                    <td class="px-6 py-4">{{ $applyLoker->pencaker->nama }}</td>
                    <td class="px-6 py-4">{{ $applyLoker->tgl_apply }}</td>
                    <td class="px-6 py-4" >
                            <a href="{{ route('apply-loker.show', ['id' => $applyLoker->id]) }}" class="blue-hyperlink">Administrasi</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection