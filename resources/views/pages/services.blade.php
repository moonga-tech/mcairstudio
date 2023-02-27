@extends('layouts.app')
@section('page-title', 'Mcair Studio | Services')
@section('content')
<div class="services">
<div class="text-center">
    <h1>Our Services for Our Clients</h1>
    <div style="">
        <hr style="width: 20%; margin: 0 auto;">
    </div>
</div>
<section class="text-center service-card-div">
    <br>
    <h1>Services</h1>
    <div class="service-card container">
        <a href="">
            <div class="card shadow" style="width: 22rem;">
            <a href="">
                <img src="asset/images/coding.jpg" class="card-img-top img-fluid" alt="...">
            </a>
            <div class="card-body">
                <h4 class="card-title text-center font-weight-bold">Computer Programming</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, alias.</p>
            </div>
        </div>
        </a>
        <div class="card shadow" style="width: 22rem;">
            <a href="">
                <img src="asset/images/web.jpg" class="card-img-top img-fluid" alt="...">
            </a>
            <div class="card-body">
                <h4 class="card-title text-center font-weight-bold">Graphical Design</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, alias.</p>
            </div>
        </div>
        <div class="card shadow" style="width: 22rem;">
            <a href="">
                <img src="asset/images/music.jpg" class="card-img-top img-fluid" alt="...">
            </a>
            <div class="card-body">
                <h4 class="card-title text-center font-weight-bold">Music Production</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, alias.</p>
            </div>
        </div>
    </div>
</section>
</div>
@endsection