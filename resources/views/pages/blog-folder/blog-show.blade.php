@extends('layouts.app')
@section('page-title', 'Blogging')


@section('content')
    <div class="container">
        <h1>{{$blog->blog_title}}</h1>
        <p>{!! $blog->blog_body !!}</p>
    </div>
@endsection