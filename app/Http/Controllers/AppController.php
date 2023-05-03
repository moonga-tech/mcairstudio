<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreateBlog;
use App\Models\ContactInfo;
use App\Models\User;

class AppController extends Controller
{
    
    
    /* -- viewing pages -- */
    public function services()
    {
        return view("pages.services");
    }
    public function about()
    {
        $companyName = 'Mcair-Studio-Tech';
        return view('pages.about', ['companyName' => $companyName]);
    }
    public function privacyPolicy() {
        return view('pages.privacy-policy');
    }
    public function course() {
        return view('pages.music-course.course-1');
    }
    public function contact() {
        return view('pages.contact');
    }
    public function contactPost() {
        $data = new ContactInfo;
        $data->contact_name = request('contact_name');
        $data->contact_email = request('contact_email');
        $data->message = request('message');
        $data->save();

        return redirect('/contact-us')->with('msg', 'Message Sent');
    }
    public function projects()
    {
        return view('pages.projects');
    }
    public function blogs() {
        $user = User::all();
        $data = CreateBlog::all();
        return view('pages.blog-folder.blogs',['data' => $data, 'user' => $user]);
    }
    public function blogID($id) {
        $blogID = CreateBlog::findOrFail($id);

        return view('pages.blog-folder.blog-id',['blogID' => $blogID,]);
    }
}
