@extends('layouts.app')
@section('page-title', 'Mcair-Studio-Tech | blogs')
@section('meta_keywords', '')
@section('meta_description', 'https://mcairstudiotech.art/blogs,')

@section('content')
<div class="container">
    <div class="blogs">
        <div class="text-center">
            <h4 class="text-success">{{session('msg')}}</h4>
        </div>
        <div class="blog-create-btn">
            <a href="{{route('createBlog')}}">
                <button type="button" class="btn mr-2 btn-md btn-outline-secondary long-btn">Create Blog</button>
            </a>
        </div>
    <h1>BLOGS</h1>
    @foreach($data as $blogs)
    <div class="card shadow" style="width: 20rem;">
        <div class="card-header">
            <h1 class="card-title text-center font-weight-bold">{{$blogs->blog_title}}</h1>
        </div>
        <a href="{{route('services')}}">
            <img src="asset/images/code.jpg" class="card-img-top img-fluid" alt="...">
        </a>
        <div class="card-body">
            <section>{{$blogs->editor}}</section>
            <a href="{{url('/blogs/{{$blogs->id')}}">
                <button type="button" class="btn btn-secondary mr-2 btn-lg">{{$blogs->id}}</button>
            </a>
        </div>
    </div>
    @endforeach
    </div>
    
</div>
@endsection