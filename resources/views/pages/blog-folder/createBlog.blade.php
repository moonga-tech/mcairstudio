@extends('layouts.app')
@section('page-title', 'Mcair-Studio-Tech | blogs')
@section('meta_keywords', '')
@section('meta_description', 'https://mcairstudiotech.art/blogs,')

@section('content')
<div class="container">
    <div class="div-wrapper">
        <h1>Create Blog</h1>
    </div>
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
        <textarea name="blog_body" id="editor">
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
@endsection