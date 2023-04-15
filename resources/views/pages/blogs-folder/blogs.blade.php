@extends('layouts.app')
@section('page-title', 'Mcair-Studio-Tech | blogs')
@section('meta_keywords', '')
@section('meta_description', 'https://mcairstudiotech.art/blogs,')

@section('content')
<div class="container">
    <div class="blogs">
        <div class="text-center">
            <h4 class="text-success"></h4>
        </div>
        <div class="blog-create-btn">
            <a href="{{route('createBlog')}}">
                <button type="button" class="btn mr-2 btn-md btn-primary">Create Blog</button>
            </a>
        </div>
    <h1>BLOGS</h1>
    </div>
    
</div>
@endsection