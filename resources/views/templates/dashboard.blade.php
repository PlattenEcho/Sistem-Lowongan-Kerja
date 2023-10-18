@extends('templates.main')

@section('body')
    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>

    <!-- Sidebar -->
    <div class="flex h-screen bg-gray-200">
        <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-gray-800 dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                @yield('sidebar-menu')
            </ul>
            <form action="/logout" method="POST" class="mt-4">
                @csrf
                <button type="submit"
                    class="inline-flex justify-center items-center w-full py-3 px-4 text-base font-medium text-center text-white rounded-lg bg-red-700 hover:bg-red-900 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900"
                    style="transition: background-color 0.3s ease">
                    Logout
                </button>
            </form>
            </div>
        </aside>

        <!-- Content Area -->
        <div class="flex-1 flex flex-col justify-center items-center">
            @yield('content')
        </div>
        
    </div>
@endsection
