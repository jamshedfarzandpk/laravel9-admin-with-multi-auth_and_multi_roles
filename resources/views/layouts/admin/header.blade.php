<!DOCTYPE html>

<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="{{ asset('admin/images/logo.svg') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="laravel 9 admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, laravel9 Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="jamshedfarzandpk">
    <title>Admin Dashboard </title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('page_css')
    @livewireStyles
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
