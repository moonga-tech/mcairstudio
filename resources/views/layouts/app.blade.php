<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- SEO -->
    <meta name="keywords" content="@yield('meta_keywords')">
    <meta name="description" content="@yield('meta_description')">
    <link rel="canonical" href="{{url()->current()}}"/>
    <!-- SEO -->
    <!-- Google Details -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3075971117498364" crossorigin="anonymous"></script>
    <meta name="google-site-verification" content="URfhmUqUqaOtCuPZgGyftQRsH_PwKE73mU2hrPC3tnc" />
    <!-- Google-Details -->

    <title>@yield('page-title')</title>

    <!-- AOS -->
    <link rel="stylesheet" href="{{asset('asset/styles.css')}}">
    @include('layouts.links')
</head>
<body>
    <div id="app">
        @include('layouts.header')
        <main class="py-4">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
</body>
</html>
