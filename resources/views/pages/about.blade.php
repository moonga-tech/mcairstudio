@extends('layouts.app')
@section('page-title', 'About-Us')
@section('meta_keywords','Mcair studio tech, About us, ')
@section('meta_description', 'https://mcairstudiotech.art/about, know more about us, views, location, technologies, co-workers, CEOs')

@section('content')
    <div class="container">
        <h1 class="text-center">About Us</h1>

        <p>
            <span style="font-weight: bolder">{{$companyName}}</span> is dedicated to:
            <ul>
                <ol class="color-redd">Music Studio Production | Trainings and Lessons.</ol>

                <ol class="color-redd">Graphics Design | 3D Design and Animations.</ol>

                <ol class="color-redd">Computer Programming | Web Dev, Software Dev and Analysis, App Dev.</ol>
            </ul>
        Our team of experts work tirelessly to provide high quality content to our clients and make desired user-friendly systems.
        </p>

        <div class="ceo-box">
            <div class="card shadow text-center" style="width: 19rem;">
                <!-- <a href="https://bit.ly/3MDqrKj"> -->
                <div>
                    <img src="asset/images/other/moonga.png" width="200px" alt="mcair" class="rounded-circle img-fluid" style="background-color:white;">
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center font-weight-bold">Moonga Manongo</h4>
                    <h5>CEO:<a href="https://mcairstudiotech.art" class="text-decoration-none">mcairstudiotech.art</a></h5>
                </div>
                <div class="card-footer">
                    <p>Computer Programmer</p>
                </div>
            </div>
            <div class="card shadow text-center" style="width: 19rem;">
                <!-- <a href="https://bit.ly/3BEKUbw"> -->
                <div>
                    <img src="asset/images/other/mudimba.jpg" width="200px" alt="mcair" class="rounded-circle img-fluid" style="background-color:white;">
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center font-weight-bold">Alex Mudimba Moonde</h4>
                    <small>mudimbasoftware company</small>
                </div>
                <div class="card-footer">
                    <p>Software Developer</p>
                </div>
            </div>
            <div class="card shadow text-center" style="width: 19rem;">
                <!-- <a href="https://bit.ly/439C6WY"> -->
                <div>
                    <img src="asset/images/other/muntanga.jpg" width="200px" alt="mcair" class="rounded-circle img-fluid" style="background-color:white;">
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center font-weight-bold text-capitalize">muntanga hatembo</h4>
                    <small>Hats HD | Quality Everything</small>
                </div>
                <div class="card-footer">
                    <p>Digital Creator</p>
                </div>
            </div>
        </div>

        <p>With years of experience in the industry and using version control like
            <span class="color-redd">git and github</span>, 
        we have a deep understanding of the challenges faced by most of the algorithms created and user experience platforms, and we are committed in delivering solutions that meet their unique desired needs. Our goal is to help our clients accomplish the best out of it, such as improve their operations, save time and money.</p>

        <p>We are proud of the relationships we have built with some of our clients and believe that our commitment to values or principles that guide
            <span style="font-weight: bolder">{{$companyName}}</span>, such as honesty, innovation, sets us apart from the competition.</p>

        <p>If you're looking for a reliable partner to help you reach your goal, look no further than <span style="font-weight: bolder">{{$companyName}}</span>. <a href="{{route('contact')}}" class="text-decoration-none">Contact us</a> today to learn more about how we can help you achieve your goals.</p>
    </div>
@endsection