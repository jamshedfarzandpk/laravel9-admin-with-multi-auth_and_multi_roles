@extends('layouts.admin.auth')
@section('meta_title', 'Admin Login')
@section('content')

    <form method="POST" action="{{ route('admin.password.update') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="mt-8 intro-x">
            <input type="email" class="block px-4 py-3 intro-x login__input form-control" placeholder="Email" name="email"
                value="{{ old('email', $request->email) }}" required >
            <input type="password" class="block px-4 py-3 mt-4 intro-x login__input form-control" placeholder="Password"
                type="password" name="password" required autofocus>
            <input type="password" class="block px-4 py-3 mt-4 intro-x login__input form-control" placeholder="Confirm Password"
                type="password" name="password_confirmation" required>

        </div>

        <div class="mt-5 text-center intro-x xl:mt-8 xl:text-left">
            <button class="w-full px-4 py-3 align-top btn btn-primary xl:w-64 xl:mr-3"
                type="submit">{{ __('Reset Password') }}</button>
        </div>
    </form>
@endsection
