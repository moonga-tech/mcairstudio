@extends('layouts.app')
@section('page-title', 'Mcair-Studio-Tech | Home-Page')
@section('meta_keywords','Home-Page, Sections, Mcair Studio and Tech')
@section('meta_description', 'https://mcairstudiotech.art, this is our home page where you can view all relevant content on our website.')

@section('content')
<div class="banner">
    <div class="container banner-content">
        <h1>Mcair Studios and Tech</h1>
        <p>
            " the creation of content to your desired expectation.
            The future of graphical design, music production and compute Programming
            is in your hands, with the help of AI ".
        </p>
        <section class="take-course">
            @guest
                @if(Route::has('login') || Route::has('register'))
                    <h3 style="color: #ffff00;">Take a Singing Class</h3>
                    <div>
                        <a href="{{url('/register')}}">
                            <button type="button" class="btn btn-outline-success mr-2" style="width: clamp(6em,22vw,16em);">Register</button>
                        </a>
                    </div>
                @endif
                    @else
                    <div>
                        <h2>Welcome To User Access</h2>
                        <div>
                            <a href="{{route('home')}}">
                                <button type="button" class="btn btn-primary mr-1 btn-lg">Dashboard</button>
                            </a>
                        </div>
                    </div>
            @endguest
        </section>
    </div>
</div>
<section class="text-center service-card-div">
    <br>
    <h1>Services</h1>
    <div style="">
        <hr style="width: 20%; margin: 0 auto;">
    </div>
    <div class="service-card container" style="padding: 1em;">
        <a href="">
            <div class="card shadow" style="width: 20rem;">
            <a href="{{route('services')}}">
                <img src="asset/images/coding.jpg" class="card-img-top img-fluid" alt="...">
            </a>
            <div class="card-body">
                    <i class="fa-light fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>                
                    <h4 class="card-title text-center font-weight-bold">Computer Programming</h4>
            </div>
        </div>
        </a>
        <div class="card shadow" style="width: 20rem;">
            <a href="{{route('services')}}">
                <img src="asset/images/web.jpg" class="card-img-top img-fluid" alt="...">
            </a>
            <div class="card-body">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                <h4 class="card-title text-center font-weight-bold">Graphical Design</h4>
            </div>
        </div>
        <div class="card shadow" style="width: 20rem;">
            <a href="{{route('services')}}">
                <img src="asset/images/music.jpg" class="card-img-top img-fluid" alt="...">
            </a>
            <div class="card-body">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                <h4 class="card-title text-center font-weight-bold">Music Production</h4>
            </div>
        </div>
    </div>
    <div style="margin:2em;">
        <a href="{{route('services')}}">
            <button class="btn btn-md mr-2 btn-success" class="btn btn-outline-secondary mr-2" style="width: clamp(6em,16vw,16em);">View More</button>
        </a>
    </div>
    <div>
        <hr style="width: 20%; margin: 1em auto;">
    </div>
</section>
<article>
    <div class="creation container text-center">
        <h1>What you think, we can create</h1>
        <br>
            <h6>The idea of surfing through popular technologies, open new heights to what you need.</h6>
        <br>
        <button type="button" class="btn btn-outline-secondary mr-2 btn-md" style="width: clamp(6em,19vw,16em);">Projects</button>
    </div>
</article>
<section class="portfolio">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="max-width: 50em; margin: 0 auto; font-size:9px;">
        <a href="{{route('projects')}}">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="asset/images/portfolio/bio.jpg" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item active">
                    <img src="asset/images/portfolio/1.jpg" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="asset/images/portfolio/bio-2.jpg" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="asset/images/portfolio/tinkale.jpg" class="d-block w-100 img-fluid" alt="...">
                </div>
            </div>
        </a>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<div class="ceo">
    <div class="ceo-box">
        <div>
            <img src="asset/images/other/moonga.png" width="200px" alt="mcair" class="rounded-circle" style="background-color:white;">
        </div>
        <div>
            <img src="asset/images/other/mudimba.jpg" width="200px" alt="mcair" class="rounded-circle">
        </div>
        <div>
            <img src="asset/images/other/muntanga.jpg" width="200px" alt="mcair" class="rounded-circle">
        </div>
    </div>
</div>
@endsection