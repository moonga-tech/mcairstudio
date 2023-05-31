<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class AdminController extends Controller
{
    public function adminHome()
    {
        $blogs = Blog::all();
        return view('admin.dashboard', ['blogs' => $blogs]);
    }
    public function adminCreateBlog(Request $request) {

        /* $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $fileImage = time().'.'.$request->image->extension();
        $fileImage = file_get_contents(); */
        
        $blogs = new Blog;
        $blogs->blog_title = request('blog_title');
        $blogs->blog_image = request('blog_image');
        $blogs->blog_body = request('blog_body');
        $blogs->save();

        return redirect()->back()->with('msg', 'blog post successful');
    }
    public function viewBlog() {
        $blogs = Blog::all();

        return view('admin.view-blog', ['blogs' => $blogs]);
    }
    public function updateBlog($id) {
        $fetchBlog = Blog::find($id);

        return view('admin.update-blog', ['fetchBlog' => $fetchBlog]);
    }
    public function contactInfo() {
        return view('admin.messages');
    }
}
