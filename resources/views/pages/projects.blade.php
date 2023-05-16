@extends('layouts.app')
@section('page-title', 'Mcair-Studio-Tech | Projects')
@section('meta_keywords', 'Projects, Graphical Design, Music Production, Coding, Programing, Problem-Solving, Programming Languages, Sections, Mcair Studio and Tech')
@section('meta_description', 'https://mcairstudiotech.art, Check out our projects and portfolios')

@section('content')
<div class="container" style="padding:2em 0;">
    <h4 class="container">
        Here will showcase some of the exciting work we have completed for our clients. We take caution in the projects we have completed and the positive impact they have had on our clients' businesses.
    </h4>

    <h5 class="container">Some of our featured projects:</h5>

<!-- [Project Name]: [Insert a brief description of the project and what the goals were. If possible, include any statistics or metrics that show the project's success.] -->
    <div class="projects">
        <div class="card shadow" style="width: 16rem;">
            <a href="#">
                <img src="asset/images/portfolio/bio.jpg" alt="graphics-design-project" class="img-fluid" srcset="">
            </a>
            <div class="card-body"></div>
            <div class="card-footer">
                <figcaption>
                    <meter value="18" min="0" max="20"></meter>
                </figcaption>
                <h4 class="card-title font-weight-bold text-capitalize"></h4>
                <small>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt, delectus.</small>
            </div>
        </div>
        <div class="card shadow" style="width: 16rem;">
            <a href="#">
                <img src="asset/images/portfolio/bio.jpg" alt="graphics-design-project" class="img-fluid" srcset="">
            </a>
            <div class="card-body"></div>
            <div class="card-footer">
                <figcaption>
                    <meter value="18" min="0" max="20"></meter>
                </figcaption>
                <h4 class="card-title font-weight-bold text-capitalize"></h4>
                <small>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt, delectus.</small>
            </div>
        </div>
        <div class="card shadow" style="width: 16rem;">
            <a href="#">
                <img src="asset/images/portfolio/bio.jpg" alt="graphics-design-project" class="img-fluid" srcset="">
            </a>
            <div class="card-body"></div>
            <div class="card-footer">
                <figcaption>
                    <meter value="18" min="0" max="20"></meter>
                </figcaption>
                <h4 class="card-title font-weight-bold text-capitalize"></h4>
                <small>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt, delectus.</small>
            </div>
        </div>
    </div>
    
    <h5 class="container">We are always trilled to take on new projects and work with clients to achieve their goals. If you have a project in mind, please do not hesitate to contact us through our <a href="{{route('contact')}}">Contact Page</a>. It will really help us grow.</h5>

</div>
@endsection