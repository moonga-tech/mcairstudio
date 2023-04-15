<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserviewController extends Controller
{
    public function createBlog() {
        return view('pages.blogs-folder.createBlog');
    }
    public function postBlog() {
        return redirect('/blogs')->with('mss', 'successfully');
    }
}
