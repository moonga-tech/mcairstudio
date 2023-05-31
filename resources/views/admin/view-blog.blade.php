@extends('layouts.app')
@section('page-title', 'Admin | Dashboard')

@section('content')
<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Blog Title</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($blogs as $blogs)
        <tr>
            <td>{{$blogs->blog_title}}</td>
            <td>{!!$blogs->blog_body!!}</td>
            <td>
                <a href="/admin/update-blog/{{$blogs->id}}" class="text-decoration-none">
                    <button type="button"  class="btn btn-outline-primary btn-sm mr-2">Edit</button>
                </a>
                <form action="/admin/delete-blogs/{{$blogs->id}}" method="post" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="completeOrder()" class="btn btn-sm btn-outline-danger mr-2">Remove</button>
                </form>
            </td>
        </tr>        
        @endforeach
        </tbody>
    </table>   
</div>
@endsection
