@extends('layouts.app')
@section('page-title', 'Contact Us')
@section('meta_keywords','Contact-Page, Sections, Mcair Studio and Tech, Contact Us')
@section('meta_description', 'https://mcairstudiotech.art/contact-us, you can contact us for further clarity on how the website is and any query.')

@section('content')
<div class="google-map-banner">
<div class="container-fluid">
	<div class="map-responsive">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31497.63331806533!2d28.72285342640491!3d-9.315170058498126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19a000c01caf07c7%3A0xc388e8f9c66c1a54!2sKashikishi!5e0!3m2!1sen!2szm!4v1684215647191!5m2!1sen!2szm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
</div>
</div>
<div class="container comment">
    <h4>
        <p>If you have any questions, queries, or comments, please do not delay to mail us. We will do our best to respond to your inquiry in time.</p>

        <p>In addition, if you prefer to use a contact form, you can find one just before this page of our website. Please fill out the form with your information and message, and we will get back to you as soon as possible.</p>

        <p>Thank you for reaching out to us, and we will appreciate your feedback.</p>
    </h4>
</div>
<h1 class="text-center text-success">{{session('msg')}}</h1>
<div style="margin:3em auto;">
    <div class="p-7 text-center"><p><h1>Contact Us</h1></p></div>
    <form action="#" method="post" class="container">
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

            <textarea class="form-control" id="editor" name="message" >
                Type your message here: min words(20) | max words(255)!
            </textarea>
        </div>


        </div>
        <div class="mb-3 text-center" required>
            <button type="submit" class="btn btn-outline-primary" style="width: clamp(6em,22vw,16em);">Send</button>
        </div>
    </form>
</div>
<div class="container text-center">
    <h4><strong>Contact: </strong>+260963689370</h4>
    <h4><strong>Email: </strong><a href="https://mail.google.com/mail/?view=cm&fs=1&to=manongomoonga@gmail.com" target="_blank">manongomoonga@gmail.com</a></h4>
</div>

<script>
    CKEDITOR.replace('editor');
</script>
@endsection