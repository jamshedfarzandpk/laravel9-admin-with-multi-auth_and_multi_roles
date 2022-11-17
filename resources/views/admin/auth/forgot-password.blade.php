@extends('layouts.admin.auth')
@section('meta_title', 'Admin Login')
@section('content')

    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

   
    <form method="POST" action="{{ route('admin.password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="mt-8 intro-x">
            <input type="email" class="block px-4 py-3 intro-x login__input form-control" placeholder="Email" name="email"
                value="{{ old('email') }}" required autofocus>
        </div>
        <div class="mt-5 text-center intro-x xl:mt-8 xl:text-left">
            <button class="w-full px-4 py-3 align-top btn btn-primary xl:w-64 xl:mr-3"
                type="submit">{{ __('Email Password Reset Link') }}</button>
        </div>
    </form>
@endsection
