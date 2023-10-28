@extends('templates.dashboard-petugas')

@section('dashboard-content')
<h1 class="text-2xl font-semibold mb-4">Welcum Back</h1>

<div class="flex items-center">
    <div class="w-20 h-20 rounded-full overflow-hidden">
        <img src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Foto Profil">
    </div>
    <div class="ml-4">
        <p class="text-lg font-semibold">{{ auth()->user()->name }}</p>
        <p class="text-sm text-gray-600">{{ ucfirst(auth()->user()->role) }}</p>
    </div>
</div>
@endsection