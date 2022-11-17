<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="{{ asset('admin/images/logo.svg')}}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="laarvel 9 admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Laravel 9 Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="jamshed1981pk@gmail.com">
    <title>Login - Laravel 9 Admin - Tailwind HTML Admin Template</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="login">
    <div class="container sm:px-10">
        <div class="block grid-cols-2 gap-4 xl:grid">
            <!-- BEGIN: Login Info -->
            <div class="flex-col hidden min-h-screen xl:flex">
                <a href="" class="flex items-center pt-5 -intro-x">
                    <img alt="Laravel 9 Tailwind HTML Admin Template" class="w-6"
                        src="{{ asset('admin/images/logo.svg') }}">
                    <span class="ml-3 text-lg text-white"> Laravel 9 Admin theme </span>
                </a>
                <div class="my-auto">
                    <img alt="Laravel 9 Tailwind HTML Admin Template" class="w-1/2 -mt-16 -intro-x"
                        src="{{ asset('admin/images/illustration.svg') }}">
                    <div class="mt-10 text-4xl font-medium leading-tight text-white -intro-x">
                        A few more clicks to
                        <br>
                        login in to your account.
                    </div>
                    <div class="mt-5 text-lg text-white -intro-x text-opacity-70 dark:text-slate-400">Manage all your
                        Admin accounts in one place</div>
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="flex h-screen py-5 my-10 xl:h-auto xl:py-0 xl:my-0">
                <div
                    class="w-full px-5 py-8 mx-auto my-auto bg-white rounded-md shadow-md xl:ml-20 dark:bg-darkmode-600 xl:bg-transparent sm:px-8 xl:p-0 xl:shadow-none sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="text-2xl font-bold text-center intro-x xl:text-3xl xl:text-left">
                        @if (Route::is('admin.login'))
                        Sign In
                        @endif
                        @if (Route::is('admin.password.request'))
                        Forgot Password
                        @endif
                        @if (Route::is('admin.password.reset'))
                        Reset Password
                        @endif
                        
                    </h2>
                    <div class="mt-2 text-center intro-x text-slate-400 xl:hidden">A few more clicks to sign in to your
                        account. Manage all your e-commerce accounts in one place</div>
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4 text-success"  :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />
                    @yield('content')
                   
                    <div class="mt-10 text-center intro-x xl:mt-24 text-slate-600 dark:text-slate-500 xl:text-left"> By
                        signin up, you agree to our <a class="text-primary dark:text-slate-200" href="">Terms and
                            Conditions</a> & <a class="text-primary dark:text-slate-200" href="">Privacy
                            Policy</a> </div>
                </div>

            </div>
            <!-- END: Login Form -->
        </div>
    </div>
    <!-- BEGIN: Dark Mode Switcher-->
    <div data-url="login-dark-login.html"
        class="fixed bottom-0 right-0 z-50 flex items-center justify-center w-40 h-12 mb-10 mr-10 border rounded-full shadow-md cursor-pointer dark-mode-switcher box">
        <div class="mr-4 text-slate-600 dark:text-slate-200">Dark Mode</div>
        <div class="border dark-mode-switcher__toggle"></div>
    </div>
    <!-- END: Dark Mode Switcher-->

    <!-- BEGIN: JS Assets-->
    <script src="{{ asset('admin/js/app.js') }}"></script>
    <!-- END: JS Assets-->
</body>

</html>
