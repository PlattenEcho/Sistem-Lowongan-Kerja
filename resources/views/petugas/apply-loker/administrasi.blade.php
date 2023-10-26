@extends('templates.dashboard-petugas')

@section('dashboard-content')
<div class="container">
    <h1 class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-gray-900 md:text-2xl lg:text-2xl dark:text-white">
    Detail Apply Loker</h1>
    <form>
        <div class="mb-6">
            <label for="name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Pencari Kerja</label>
            <input type="text" id="name" value="Prayoga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-4" required disabled>
        </div>
        <div class="mb-6">
            <label for="gender" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
            <input type="input" id="gender" value="Jantan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-4" required disabled>
        </div>
        <div class="mb-6">
            <label for="telpon" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">No. Telepon</label>
            <input type="input" id="telpon" value="(+62) 821" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-4" required disabled>
        </div>
        <div class="mb-6">
            <label for="job" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan yang Dilamar</label>
            <input type="input" id="job" value="Kepolisian" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-4" required disabled>
        </div>
        <div class="mb-6">
            <label for="type" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Tipe Pekerjaan</label>
            <input type="input" id="type" value="Part-Time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-4" required disabled>
        </div>
        <div class="mb-6">
            <label for="cptelpon" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">No. Telepon CP</label>
            <input type="input" id="cptelpon" value="(+62) 810" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-4" required disabled>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Lulus Administrasi</button>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tidak Lulus Administrasi</button>
        <a href="#"
            class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-5 mr-2 mb-3 dark:bg-gray-600 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
            Kembali
        </a>
    </form>
</div>
@endsection