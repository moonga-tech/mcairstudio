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
                <li class="nav-item dropdown dropdown-li">
                    <a class="nav-link dropdown-toggle" href="{{route('services')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu dropdown-menu-services">
                        <li><a class="dropdown-item" href="{{route('services')}}">Computer Programming</a></li>
                        <li><a class="dropdown-item" href="{{route('services')}}">Graphical Design</a></li>
                        <li><a class="dropdown-item" href="{{route('services')}}">Music Production</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Event and News</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="{{route('learn')}}" class="nav-link">Learn</a></li>
                <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{route('blogs')}}" class="nav-link">Blogs</a></li>
                <li class="nav-item dropdown dropdown-li-projects">
                    <a class="nav-link dropdown-toggle" href="{{route('projects')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Projects
                    </a>
                    <ul class="dropdown-menu dropdown-menu-projects">
                        <li><a class="dropdown-item" href="{{route('projects')}}">Web Development</a></li>
                        <li><a class="dropdown-item" href="{{route('projects')}}">Computer Graphics</a></li>
                        <li><a class="dropdown-item" href="{{route('projects')}}">Music Production</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Visit Github Repo</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto auth-nav">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link login-btn" href="{{ route('login') }}" ><button class="btn btn-danger" style="width: clamp(8em,16vw,8em);">{{ __('Login') }}</button></a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item" style="margin-top: 6px;">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        @if(Auth::user()->name == "MasterAdmin")
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('admin.home')}}">Dashboard</a>
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
                        @else
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('home')}}">Home</a>
                            <a class="dropdown-item" href="">Profile</a>
                            <a class="dropdown-item" href="{{route('createBlog')}}">Create Blog</a>
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
                        @endif
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