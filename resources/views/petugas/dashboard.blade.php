@extends('templates.dashboard-petugas')

@section('dashboard-content')
<h1 class="text-2xl font-semibold mb-4">Welcome Back</h1>
<div class="flex items-center">
    <div class="w-20 h-20 rounded-full overflow-hidden">
        <img src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Foto Profil">
    </div>
    <div class="ml-4">
        <p class="text-lg font-semibold">{{ auth()->user()->name }}</p>
        <p class="text-sm text-gray-600">{{ ucfirst(auth()->user()->role) }}</p>
    </div>
</div>

<div class="mt-8 grid grid-cols-2 gap-4">
    <!-- Kotak "Total Lowongan Pekerjaan" -->
    <div class="p-4 border border-gray-300 rounded-lg">
        <h2 class="text-xl font-semibold mb-2">Total Lowongan Pekerjaan</h2>
        <p class="text-lg">{{ $lokerCount }}</p>
    </div>

    <!-- Kotak "Total Pencari Pekerjaan" -->
    <div class="p-4 border border-gray-300 rounded-lg">
        <h2 class="text-xl font-semibold mb-2">Total Pencari Pekerjaan</h2>
        <p class="text-lg">{{ $pencakerCount }}</p>
    </div>
</div>
</div>
@endsection