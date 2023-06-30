@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h5>Current Courses</h5>
                    <ul>
                        <li><a href="{{route('course')}}" class="nav-link">Course - (Music-Class)</a></li>
                        <li><a href="" class="nav-link">[ JOIN ]Web Development Full Course</a></li>
                    </ul>
                </div>

                <div class="card-footer">
                    <ul>
                        <li><a href="{{route('createBlog')}}" class="nav-link">Create a blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
