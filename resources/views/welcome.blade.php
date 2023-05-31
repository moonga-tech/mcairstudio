@extends('layouts.app')
@section('page-title', 'Home Page')
@section('meta_keywords','Home-Page, Sections, Mcair Studio and Tech')
@section('meta_description', 'https://mcairstudiotech.art, this is our home page where you can view all relevant content on our website.')

@section('content')
<div class="banner shadow">
    <div class="container banner-content">
        <div>
            <h1 class="text-capitalize">mcair studios and tech</h1>
            <small><h5 class="text-capitalize">Creative Innovator</h5></small>
        </div>
        <p class="text-capitalize">
            industry-leading studio at the forefront of aerial photography and videography. With a passion for capturing the world from unique perspectives, our skilled team of professionals combines cutting-edge technology and artistic vision to deliver awe-inspiring results. From stunning landscapes to high-octane action shots, we specialize in creating breathtaking visuals that leave a lasting impact. With an unwavering commitment to quality and innovation, MC AirStudioTech brings your creative vision to new heights, unlocking the limitless possibilities of the sky. Trust us to bring your projects to life with unparalleled expertise and a passion for pushing boundaries.

            " the creation of content to your desired expectation.
            The future of graphical design, music production and compute Programming
            is in your hands, with the help of AI ".
        </p>
        <button>M</button>
    </div>
</div>
<div class="count-wrapper container" id="counter-stats">
    <div class="shadow stats">
        <i class="fa fa-code" aria-hidden="true"></i>
        <p class="counting" data-count="104590">0</p>
        <h5>Lines of code</h5>
    </div>
    <div class="shadow stats">
        <i class="fa fa-check" aria-hidden="true"></i>
        <p class="counting" data-count="180">0</p>
        <h5>Projects done</h5>
    </div>
    <div class="shadow stats">
        <i class="fa fa-user" aria-hidden="true"></i>
        <p class="counting" data-count="20">0</p>
        <h5>Happy clients</h5>
    </div>
</div>
<section class="text-center service-card-div">
    <br>
    <h1>Services</h1>
    <div style="">
        <hr style="width: 20%; margin: 0 auto;">
    </div>
    <div class="service-card container" style="padding: 1em;">
        <div class="card shadow home-card" style="width: 20rem;">
            <a href="{{route('services')}}">
                <img src="asset/images/code.jpg" class="card-img-top img-fluid" alt="...">
            </a>
            <div class="card-body">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>                
                    <h4 class="card-title text-center font-weight-bold">Computer Programming</h4>
            </div>
        </div>
        <div class="card shadow home-card" style="width: 20rem;">
            <a href="{{route('services')}}">
                <img src="asset/images/art.jpg" class="card-img-top img-fluid" alt="...">
            </a>
            <div class="card-body">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                <h4 class="card-title text-center font-weight-bold">Graphical Design</h4>
            </div>
        </div>
        <div class="card shadow home-card" style="width: 20rem;">
            <a href="{{route('services')}}">
                <img src="asset/images/music.jpg" class="card-img-top img-fluid" alt="...">
            </a>
            <div class="card-body">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <h4 class="card-title text-center font-weight-bold">Music Production</h4>
            </div>
        </div>
    </div>
    <div style="margin:2em;">
        <a href="{{route('services')}}">
            <button class="btn btn-md mr-2 btn-danger" style="width: clamp(10em,18vw,16em);">View More</button>
        </a>
    </div>
    <div>
        <hr style="width: 20%; margin: 1em auto;">
    </div>
</section>
<article>
    <div class='console-container'><span ></span></div>
    <div class="creation container text-center">
        <h1 class="text-capitalize">What you think, 
            <span id="text"></span><span class='console-underscore' id='console'>&#95;</span>
        </h1>
        <br>
            <h6>The idea of surfing through popular technologies, open new heights to what you need.</h6>
        <br>
        <a href="{{route('projects')}}">
            <button type="button" class="btn btn-outline-danger w-lg rounded" style="width: clamp(10em,16vw,16em);">Projects</button>
        </a>
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

<section>
    <div>
        <hr style="width: 20%; margin: 1em auto;">
    </div>
    <div class="text-center">

    </div>
    <div class="ceo-box">
        <div class="card shadow text-center" style="width: 16rem;">
            <a href="https://bit.ly/3MDqrKj">
                <img src="asset/images/other/moonga.png" width="200px" alt="mcair" class="rounded-circle img-fluid" style="background-color:white;">
            </a>
            <div class="card-body">
                <h4 class="card-title text-center font-weight-bold">Moonga Manongo</h4>
                <small>mcairstudiotech.art</small>
            </div>
        </div>
        <div class="card shadow text-center" style="width: 16rem;">
            <a href="https://bit.ly/3BEKUbw">
                <img src="asset/images/other/mudimba.jpg" width="200px" alt="mcair" class="rounded-circle img-fluid" style="background-color:white;">
            </a>
            <div class="card-body">
                <h4 class="card-title text-center font-weight-bold">Alex Mudimba Moonde</h4>
                <small>mudimbasoftware company</small>
            </div>
        </div>
        <div class="card shadow text-center" style="width: 16rem;">
            <a href="https://bit.ly/439C6WY">
                <img src="asset/images/other/muntanga.jpg" width="200px" alt="mcair" class="rounded-circle img-fluid" style="background-color:white;">
            </a>
            <div class="card-body">
                <h4 class="card-title text-center font-weight-bold text-capitalize">muntanga hatembo</h4>
                <small>Hats HD | Quality Everything</small>
            </div>
        </div>
    </div>
</section>
@endsection