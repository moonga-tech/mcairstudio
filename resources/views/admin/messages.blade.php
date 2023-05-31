@extends('layouts.app')
@section('page-title', 'Admin | Dashboard')

@section('content')
<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($messages as $messages)
        <tr>
            <td>{{$messages->contact_name}}</td>
            <td>{{$messages->contact_email}}</td>
            <td>{!!$messages->message!!}</td>
            <td>
                <a href="/admin/{{$messages->id}}" class="text-decoration-none">
                    <button type="button"  class="btn btn-outline-primary btn-sm mr-2">Read</button>
                </a>
                <form action="/admin/{{$messages->id}}" method="post" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="completeOrder()" class="btn btn-sm btn-outline-danger mr-2">Delete</button>
                </form>
            </td>
        </tr>        
        @endforeach
        </tbody>
    </table>   
</div>
@endsection
