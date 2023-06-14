<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\ContactInfo;

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
    /* ** -- update blogs ** */
    public function updateBlogContent($id) {
        $updateBlogContent = Blog::find($id);

        $updateBlogContent->blog_title = request('blog_title');
        $updateBlogContent->blog_image = request('blog_image');
        $updateBlogContent->blog_body = request('blog_body');
        $updateBlogContent->update();

        return redirect()->back();
    }
    public function messages() {
        $messages = ContactInfo::all();
        return view('admin.messages',['messages' => $messages]);
    }
}
