@extends('layouts.app')
@section('page-title', 'Admin | Dashboard')

@section('content')
<div class="container">

    <main class="shadow" style="padding:2em;">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="row mb-3">
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="blog_title" required autocomplete="name" autofocus placeholder="Blog title" value="{{$fetchBlog->blog_title}}">
                </div>
            </div>
            <div class="div-wrapper">
                <div class="row mb-3">
                    <label for="image"><h5>{{ __('Blog Image') }}</h5></label>

                    <div class="col-md-6">
                        <input id="name" type="file" class="form-control" value="$fetchBlog->blog_image" name="blog_image" autocomplete="name" autofocus placeholder="Image">
                    </div>
                </div>
            </div>
            <textarea name="blog_body" id="editor" value="{!!$fetchBlog->blog_body!!}">
            </textarea>

            <div class="div-wrapper">
                <button type="submit" class="btn btn-success">Update Content</button>
            </div>
        </form>

        <script>
            // Replace the <textarea> with a CKEditor
            CKEDITOR.replace('editor');
        </script>
    </main>

</div>
@endsection
