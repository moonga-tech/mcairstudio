@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h1>Master Singing Class</h1>    
            </div>
        </div>
        <div class="alert alert-primary">
            <p style="text-transform:capitalize; text-align:center;">welcome to this music short course.</p>
            <p style="text-transform:capitalize; text-align:center;"><a href="https://chat.whatsapp.com/HxsMG3XmzxlG4EJdGZ6SGb" target="_blank" rel="noopener noreferrer" class="text-decoration-none">Join the group and interact with your friends.</a></p>
        </div>
        <section class="course-content">
            <div class="text-center">
            <h1>Introduction to Vocalism</h1>
            <div class="embed-responsive embed-responsive-4by3 container-fluid">
                <iframe width="100%" height="80%" src="https://www.youtube.com/embed/EjCFFURapcI" title="introduction 1.1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" class="embed-responsive-item col-sm-12" allowfullscreen style="min-height:30em;"></iframe>
            </div>
            </div>
        </section>
    </div>
@endsection