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
        <nav class="navbar navbar-expand-md bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('/asset/images/logo.png')}}" alt="logo" srcset="" width="50px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto top-nav">
                        <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="{{route('services')}}" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Blogs</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Projects</a></li>
                        <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                        <button type="button" class="btn btn-outline-danger" onclick="AppBtn()">Get App</button>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto auth-nav">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <footer>
            <div class="bg-dark">
                <div class="container footer-top">
                    <div class="container info">
                        <!-- <div>
                            <h1>Partnered</h1>
                            <li>Mudimba Software</li>
                            <li>HD Hats</li>
                            <li>Spinzol Beat & Mosente</li>
                            <li>Mercy Sounds</li>
                        </div>
                        <div>
                            <h1>Contact Us</h1>
                            <li><a href="http://">Facabook</a></li>
                            <li><a href="http://">Whatsapp | 0972273828</a></li>
                            <li><a href="http://">Send Mail</a></li>
                        </div>
                        <div>
                            <h1>Lessons and School</h1>
                            <li>Music and Vocalism</li>
                            <li>Programming</li>
                            <li>Graphical Design</li>
                            <li>Bricklaying and Plastering</li>
                            <li>Automotive Mechanics</li>
                            <li><a href="#">Also check out our blogs</a></li>
                        </div> -->
                        <div>
                            <div class="newsletter">
                                <h5>-- news letter --</h5>
                                <h1>start with us today!</h1>
                            </div>
                            <div>
                                <form action="" method="get">
                                    @csrf
                                    <input type="email" name="news-email" id="news-email" class="form-control" placeholder="news-letter-email">
                                </form>
                            </div>
                        </div>
                        <div class="footer-slogan">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, deleniti?</p>
                        </div>
                    </div>
                    <div class="social container">
                        <div>
                            <h6><a href="{{route('privacy-policy')}}">Privacy Policy</a></h6>
                            <h6><a href="{{route('privacy-policy')}}">Terms and Conditions</a></h6>
                            <h6><a href="{{route('privacy-policy')}}">Cookie Policy</a></h6>
                        </div>
                        <div class="">
                            <h4>Chat with us</h4>
                            <div>
                                <i>
                                    <img src="asset/images/icon/f.png" alt="" srcset="">
                                </i>
                                <i>
                                    <img src="asset/images/icon/i.png" alt="" srcset="">
                                </i>
                                <i>
                                    <img src="asset/images/icon/y.png" alt="" srcset="">
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p class="text-center">Mcair-Studios-Tech | &copy; 2023 All Rights Reserved. <span class="partner-rights">@mudimba software @hats HD</span></p>
            </div>
        </footer>
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
