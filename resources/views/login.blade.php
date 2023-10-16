@extends('templates.main')

@section('body')
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="login-outer-container">
            <a href="#" class="app-logo">
                <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                Siscaker
            </a>
            <div class="login-container">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="login-message">
                        Sign in ke akun Anda
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="#">
                        <div>
                            <label for="email" class="form-label">
                                Email
                            </label>
                            <input type="email" name="email" id="email"
                                class="form-input"placeholder="name@company.com">
                        </div>
                        <div>
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="form-input">
                        </div>
                        <button type="submit" class="full-horizontal-button">
                            Sign in
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
