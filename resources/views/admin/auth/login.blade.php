@extends('layouts.admin.auth')
@section('meta_title', 'Admin Login')
@section('content')
    <form method="POST" action="{{ route('admin.login') }}" aria-label="{{ __('Admin Login') }}">
        @csrf
        <div class="mt-8 intro-x">
            <input type="email" class="block px-4 py-3 intro-x login__input form-control" placeholder="Email" name="email"
                value="{{ old('email') }}" required autofocus>
            <input type="password" class="block px-4 py-3 mt-4 intro-x login__input form-control" placeholder="Password"
                type="password" name="password" required autocomplete="current-password">
        </div>
        <div class="flex mt-4 text-xs intro-x text-slate-600 dark:text-slate-500 sm:text-sm">
            <div class="flex items-center mr-auto">
                <input id="remember-me" type="checkbox" class="mr-2 border form-check-input">
                <label class="cursor-pointer select-none" for="remember-me" name="remember">Remember
                    me</label>
            </div>
            <a href="{{ route('admin.password.request') }}">Forgot Password?</a>
        </div>
        <div class="mt-5 text-center intro-x xl:mt-8 xl:text-left">
            <button class="w-full px-4 py-3 align-top btn btn-primary xl:w-32 xl:mr-3" type="submit">Login</button>
        </div>
    </form>
    @endsection
