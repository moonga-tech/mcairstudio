@extends('layouts.app')
@section('page-title', 'Admin | Dashboard')

@section('content')
<div class="admin-main">
    <div class="bg-dark left-side">
        <div class="inner-wrapper">
            <a href="{{route('createBlog')}}">
            <button class="btn btn-outline-success shadow">Create Article</button>
        </a><a href="">
            <button class="btn btn-danger">Post News</button>
        </a>
        <a href="{{route('viewBlog')}}">
            <button class="btn btn-primary">View Blogs</button>
        </a>
        </div>
    </div>
    <main class="shadow">
    <form action="/create-blog" method="post" enctype="multipart/form-data">
    @csrf
    @method("POST")
    <div class="row mb-3">
        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="blog_title" required autocomplete="name" autofocus placeholder="Blog title">
        </div>
    </div>
    <!-- <div class="div-wrapper">
        <div class="row mb-3">
            <label for="image"><h5>{{ __('Blog Image') }}</h5></label>

            <div class="col-md-6">
                <input id="name" type="file" class="form-control" name="image" required autocomplete="name" autofocus placeholder="Image">
            </div>
        </div>
    </div> -->
        <textarea name="editor" id="editor">
            Type your blog content here!
        </textarea>
        <div class="div-wrapper">
        <button type="submit" class="btn btn-success">Save Content</button>
        </div>
    </form>

    <script>
        // Replace the <textarea> with a CKEditor
        CKEDITOR.replace('editor');
    </script>
    </div>
    </main>
</div>
@endsection
