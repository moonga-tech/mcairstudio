@extends('layouts.app')
@section('page-title', 'Blogging')


@section('content')
    <div class="container">
        <h1>{{$blogShow->blog_title}}</h1>
        <p>{!! $blogShow->blog_body !!}</p>
    </div>
@endsection