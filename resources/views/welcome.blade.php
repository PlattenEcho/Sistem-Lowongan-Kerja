@extends('templates.main')

@section('body')
<section class="bg-gradient-to-r from-red-500 to-indigo-600 text-white py-20">
    <div class="container text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">Selamat Datang di SISCAKER</h1>
        <p class="text-lg mb-8">Temukan Pekerjaan Impian Anda dengan Sistem Seleksi Lowongan Kerja Kami</p>
        <div class="flex flex-col space-y-4 md:flex-row md:justify-center md:space-y-0 md:space-x-4">
            <a href="/login" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center bg-white text-blue-700 rounded-lg hover:bg-blue-100 transition duration-300 ease-in-out">
                Login Sekarang
            </a>
        </div>
        @auth
        <div class="mt-8">
            <p class="text-xl">Logged in as {{ auth()->user()->name}}</p>
            <a href="/dashboard" class="inline-block mt-4 py-2 px-6 bg-white text-blue-700 font-medium rounded-full hover:bg-blue-100 transition duration-300 ease-in-out">Dashboard</a>
        </div>
        @else
        <div class="mt-8">
            <p class="text-lg">Bergabunglah dengan kami dan temukan peluang karier terbaik Anda.</p>
            <h2 class="text-2xl font-bold mb-2">PBP Mini Project</h2>
        </div>
        @endauth
    </div>
</section>
<section class="bg-white py-16">
    <div class="container">
        <h2 class="text-3xl md:text-4xl font-bold mb-8 text-center">Perusahaan Ternama</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="flex justify-center items-center h-40 bg-white rounded-lg shadow-md">
                <img src="https://seeklogo.com/images/T/tokopedia-logo-40654CCDD6-seeklogo.com.png" alt="Gojek" class="object-cover rounded-lg" style="max-width: 1000px; max-height: 150px;">
            </div>
            <div class="flex justify-center items-center h-40 bg-white rounded-lg shadow-md">
                <img src="https://seeklogo.com/images/H/hm-sampoerna-logo-64BA2D55A9-seeklogo.com.png" alt="Image 2" class="object-cover rounded-lg" style="max-width: 1000px; max-height: 160px;">
            </div>
            <div class="flex justify-center items-center h-40 bg-white rounded-lg shadow-md">
                <img src="https://seeklogo.com/images/A/astra-international-logo-01E5524659-seeklogo.com.png" alt="Image 3" class="object-cover rounded-lg" style="max-width: 1000px; max-height: 150px;">
            </div>
            <div class="flex justify-center items-center h-40 bg-white rounded-lg shadow-md">
                <img src="https://seeklogo.com/images/B/baru-gojek-logo-CEAE385828-seeklogo.com.png" alt="Image 3" class="object-cover rounded-lg" style="max-width: 1000px; max-height: 150px;">
            </div>
            <div class="flex justify-center items-center h-40 bg-white rounded-lg shadow-md">
                <img src="https://seeklogo.com/images/P/pt-kai-kereta-api-indonesia-2020-logo-C71614B016-seeklogo.com.png" alt="Image 3" class="object-cover rounded-lg" style="max-width: 1000px; max-height: 100px;">
            </div>
            <div class="flex justify-center items-center h-40 bg-white rounded-lg shadow-md">
                <img src="https://seeklogo.com/images/G/garuda-indonesia-logo-BD82882F07-seeklogo.com.png" alt="Image 3" class="object-cover rounded-lg" style="max-width: 1000px; max-height: 120px;">
            </div>
            <div class="flex justify-center items-center h-40 bg-white rounded-lg shadow-md">
                <img src="https://seeklogo.com/images/T/toyota-logo-08A29AEE08-seeklogo.com.png" alt="Image 3" class="object-cover rounded-lg" style="max-width: 1000px; max-height: 130px;">
            </div>
            <div class="flex justify-center items-center h-40 bg-white rounded-lg shadow-md">
                <img src="https://seeklogo.com/images/I/indofood-logo-DB0FFAFA8D-seeklogo.com.png" alt="Image 3" class="object-cover rounded-lg" style="max-width: 1000px; max-height: 150px;">
            </div>
            <div class="flex justify-center items-center h-40 bg-white rounded-lg shadow-md">
                <img src="https://seeklogo.com/images/B/bmw-logo-AD930473AC-seeklogo.com.png" alt="Image 3" class="object-cover rounded-lg" style="max-width: 1000px; max-height: 150px;">
            </div>
        </div>
    </div>
</section>
<footer class="bg-gray-800 text-white py-8">
    <div class="container flex flex-col items-center">
        <p class="text-lg mb-2">© 2023 SISCAKER - PBP Mini Project. All rights reserved.</p>
        <div class="flex space-x-4">
            <a href="#" class="hover:text-blue-500 transition duration-300 ease-in-out">Privacy Policy</a>
            <a href="#" class="hover:text-blue-500 transition duration-300 ease-in-out">Terms of Service</a>
        </div>
    </div>
</footer>
@endsection
