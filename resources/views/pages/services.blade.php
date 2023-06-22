@extends('layouts.app')
@section('page-title', 'Services')
@section('meta_keywords','pricing, service, duties, coding, music production, computer programming, computer languages, graphical design')
@section('meta_description', 'https://mcairstudiotech.art/services, services and skills provided to ensure our clients find it comfortable')
@section('content')
<div class="services">
<section class="text-center service-card-div">
    <h1>Services</h1>
    <div class="service-card container">
        <div class="card shadow" style="width: 19rem;">
            <div class="card-header">
                <img src="asset/images/code.jpg" class="card-img-top img-fluid" alt="...">
                <h4 class="card-title text-center font-weight-bold">Computer Programming</h4>
            </div>

            <div class="card-body">
                <p>Skills: <span class="text-secondary">Programming Languages</span></p>
                <p>PHP, Python, ReactJs and React-Native, JavaScript, C/C++, Java</p>
            </div>

            <div class="card-footer">
                <button class="btn btn-secondary px-5">Pricing</button>
            </div>
        </div>
        <div class="card shadow" style="width: 19rem;">
            <div class="card-header">
                <img src="asset/images/art.jpg" class="card-img-top img-fluid" alt="...">
                <h4 class="card-title text-center font-weight-bold">Graphical Design</h4>
            </div>
            <div class="card-body">
                <p>Skills: <span class="text-secondary">Computer Graphics</span></p>
                <p>Photoshop, Illustrator, Cinema 4D, After Effects, Corel-Draw</p>
            </div>
            <div class="card-footer">
                <button class="btn btn-secondary btn-md px-5">Pricing</button>
            </div>
        </div>
        <div class="card shadow" style="width: 19rem;">
            <div class="card-header">
                <img src="asset/images/music.jpg" class="card-img-top img-fluid" alt="...">
                <h4 class="card-title text-center font-weight-bold">Music Production</h4>
            </div>
            <div class="card-body">
                <p>Skiils: <span class="text-secondary">Music Engineering</span></p>
                <p>FL Studio, Cubase, Adobe Audition</p>
            </div>
            <div class="card-footer">
                <button class="btn btn-secondary btn-md px-5">Pricing</button>
            </div>
        </div>
    </div>
</section>
</div>
@endsection