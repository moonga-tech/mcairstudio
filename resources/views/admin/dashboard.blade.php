@extends('layouts.app')
@section('page-title', 'Admin | Dashboard')

@section('content')
<div class="admin-main">
    <div class="bg-dark left-side">
        <div class="inner-wrapper">
            <div>
                <a href="{{route('createBlog')}}">
                    <button class="btn btn-outline-success shadow">Create Article</button>
                </a>
            </div>
            <div>
                <a href="">
                    <button class="btn btn-danger">Post News</button>
                </a>
            </div>
            <div>
                <a href="{{route('viewBlog')}}">
                    <button class="btn btn-primary">View Blogs</button>
                </a>
            </div>
            <div>
                <a href="#">
                    <button class="btn btn-outline-light">Messages</button>
                </a>
            </div>
        </div>
    </div>
    <div class="shadow right-side">
        <img src="{{asset('C:\xampp\tmp\php681E.tmp')}}" alt="img" srcset="">
        <h4 class="text-capitalize text-success">{{session('msg')}}</h4>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            @method("POST")
            <div class="row mb-3">
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="blog_title" required autocomplete="name" autofocus placeholder="Blog title">
                </div>
            </div>
            <div class="row mb-3">
                <label for="image"><h5>{{ __('Blog Image') }}</h5></label>
                <div class="col-md-6">
                    <input id="name" type="file" class="form-control" name="blog_image" autocomplete="name" autofocus placeholder="Image">
                </div>
            </div>
            
                <textarea name="blog_body" id="editor">
                    Type your blog content here!
                </textarea>
            <!-- <div class="row mb-3">
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="meta_keywords" autofocus placeholder="meta keywords... what keywords does the search engine check">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="meta_description" autofocus placeholder="meta description.... what is the blog all about..">
                </div>
            </div> -->
            <div class="div-wrapper">
                <button type="submit" class="btn btn-success">Save Content</button>
            </div>
        </form>

        <script>
            // Replace the <textarea> with a CKEditor
            CKEDITOR.replace('editor');
        </script>
    </div>
</div>
@endsection
