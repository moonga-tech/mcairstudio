<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreateBlog;


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
        return redirect('/contact-us')->with('msg', 'Message Sent');
    }
    public function projects()
    {
        return view('pages.projects');
    }
    public function blogs() {
        $data = CreateBlog::all();
        return view('pages.blog-folder.blogs',['data' => $data]);
    }
}
