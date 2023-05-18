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

        @foreach($data as $blogs)
        <div class="card shadow text-center" style="width: 40rem;">
            <div class="card-header">
                <h1 class="card-title font-weight-bold">{{$blogs->blog_title}}</h1>
            </div>
            <div class="card-wrapper">
                <a href="{{route('services')}}">
                    <img src="asset/images/code.jpg" class="card-img-top img-fluid" alt="...">
                </a>
                <div class="card-body">
                    <section>{!! $blogs->editor !!}</section>
                    <a href="/blogs/{$blogs->id}">
                        <button type="button" class="btn btn-secondary mr-2 btn-md">View More</button>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
</div>

@endsection