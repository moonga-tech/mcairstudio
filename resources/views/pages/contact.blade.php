@extends('layouts.app')
@section('page-title', 'Mcair-Studio-Tech | Contact-Us')
@section('meta_keywords','Contact-Page, Sections, Mcair Studio and Tech, Contact Us')
@section('meta_description', 'https://mcairstudiotech.art/contact-us, you can contact us for further clarity on how the website is and any query.')

@section('content')
<div class="google-map-banner">

</div>
<div style="max-width: 20rem; margin:7em auto;">
    <div class="p-7 text-center"><p><h1>Contact Us</h1></p></div>
    <form action="/contact" method="post">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="contact_name" placeholder="e.g: maxwell, john" maxlength="10" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="contact_email" placeholder="name@email.com" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Your Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="message" placeholder="type here...........255-Character"></textarea>
        </div>
        <div class="mb-3 text-center" required>
            <button type="submit" class="btn btn-outline-primary" style="width: clamp(6em,22vw,16em);">Send</button>
        </div>
    </form>
</div>
<div class="container text-center">
    <h4><strong>Contact: ### [ +260963689370 ]</strong></h4>
    <h4><small><em>Email:</em> manongomoonga@gmail.com</small></h4>
    <h4></h4>
</div>
@endsection