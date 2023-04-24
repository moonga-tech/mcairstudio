<nav class="navbar navbar-expand-md bg-white shadow-sm fixed-top">
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{route('services')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('services')}}">Computer Programming</a></li>
                        <li><a class="dropdown-item" href="{{route('services')}}">Graphical Design</a></li>
                        <li><a class="dropdown-item" href="{{route('services')}}">Music Production</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Event and News</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{route('blogs')}}" class="nav-link">Blogs</a></li>
                <li class="nav-item"><a href="{{route('projects')}}" class="nav-link">Projects</a></li>
                <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                <!-- <button type="button" class="btn-ot-blue-6" onclick="AppBtn()">Get App</button> -->
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
                            <a class="nav-link" href="{{ route('register') }}"><button class="btn btn-danger">{{ __('Register') }}</button></a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i><img src="asset/images/icon/user.svg" alt="" srcset=""></i>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('home')}}">Auth-Home</a>
                            <a class="dropdown-item" href="{{route('course')}}">Music Course</a>
                            <hr class="dropdown-divider">
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

<script>
    function AppBtn() {
        swal({
            title: "Important Notice",
            text: "Our App is under development, soon to notify! Thank you.",
            icon: "warning",
        })
    }
</script>