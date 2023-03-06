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
    
    <!-- Google Details -->
     
    <!-- Google-Details -->

    <title>@yield('page-title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('asset/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/button.css')}}">
    <link rel="stylesheet" href="{{asset('asset/sass/app.scss')}}">
    
    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{asset('asset/images/logo.png')}}" type="image/x-icon">

    <!-- Scripts -->
    <script type="module" src="{{asset('asset/js/app.js')}}" defer></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" integrity="sha512-giQeaPns4lQTBMRpOOHsYnGw1tGVzbAIHUyHRgn7+6FmiEgGGjaG0T2LZJmAPMzRCl+Cug0ItQ2xDZpTmEc+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" integrity="sha512-G/T7HQJXSeNV7mKMXeJKlYNJ0jrs8RsWzYG7rVACye+qrcUhEAYKYzaa+VFy6eFzM2+/JT1Q+eqBbZFSHmJQew==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/092c3209a1.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
        @include('layouts.header')
        <main>
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
    <script>
        function AppBtn() {
            swal({
                title: "Important Notice",
                text: "Our App is under development, soon to notify! Thank you.",
                icon: "warning",
            })
        }
    </script>
</body>
</html>
