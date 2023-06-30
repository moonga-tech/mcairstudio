@extends('layouts.app')
@section('page-title', 'Blogs Content')
@section('meta_keywords', '')
@section('meta_description', 'https://mcairstudiotech.art/blogs,')

@section('content')
<div class="container">
    <div class="blogs">
        <div class="text-center">
            <h4 class="text-success">{{session('msg')}}</h4>
        </div>        
        @foreach($blogs as $blogs)
        <div class="card shadow">
            <div class="card-header text-center">
                <h3 class="card-title font-weight-bold">{{$blogs->blog_title}}</h3>
            </div>
            <div class="card-wrapper">
                <div>
                    <img src="asset/images/icon/blog.png" class="card-img-top img-fluid" alt="...">
                </div>
                <div class="card-body">
                    <section>{!! $blogs->blog_body !!}</section>
                    <div class="mt-2 text-center">
                        <a href="{{ route('blogShow', $blogs->id, $blogs->title) }}">
                            <button type="button" class="btn btn-secondary mr-2 btn-md">View More</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection