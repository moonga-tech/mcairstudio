<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\ContactInfo;
use App\Models\User;

/* ** ** ** */

class AppController extends Controller
{
    
    /* -- viewing pages -- */
    public function services()
    {
        return view("pages.services");
    }
    public function learn() {
        return view('pages.learn');
    }
    public function about()
    {
        $companyName = 'Mcair-Studio-Tech';
        return view('pages.about', ['companyName' => $companyName]);
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

        return redirect()->back()->with('msg', 'Message Sent, Thank You');
    }
    public function projects() {
        return view('pages.projects');
    }
    public function blogs(Blog $blog) {
        $user = User::all();
        $blog = Blog::all();
        return view('pages.blog-folder.blogs',['blog' => $blog]);
    }
    public function blogShow(Blog $blog) {
        /* $blogShow = Blog::findOrFail($id); 
 */
        $blog = str_replace("-"," ",$blog->blog_title);
        return view('pages.blog-folder.blog-show', compact('blog')/* ['blogShow' => $blogShow,] */);
    }
    public function privacyPolicy() {
        return view('pages.privacy-policy');
    }
    public function termsAndConditions() {
        $companyName = "Mcair-Studio-Tech";

        return view('pages.terms-conditions',['companyName' => $companyName]);
    }
    public function pricingPage() {
        return view('pages.pricing');
    }
    /* 
    ****** footer pages *******
    */
    public function githubRepo() {
        return view('pages.footer-pages.github-repo');
    }
    public function musicCloudPage() {
        return view('pages.footer-pages.music-cloud');
    }
    public function behancePage() {
        return view('pages.footer-pages.behance');
    }
    public function codeReactjs() {
        return view('pages.code.reactjs');
    }
    public function codehtmlcss() {
        return view('pages.footer-pages.htmlcss');
    }
    public function codeCpp() {
        return view('pages.footer-pages.htmlcss');
    }
}
