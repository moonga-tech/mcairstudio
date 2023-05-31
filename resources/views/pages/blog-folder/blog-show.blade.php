@extends('layouts.app')
@section('page-title', '{{$blogShow->blog_title}}')


@section('content')
    <div class="container">
        <h1>{{$blogShow->blog_title}}</h1>
        <p>{{$blogShow->blog_body}}</p>
    </div>
@endsection