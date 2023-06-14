<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function createBlog() {
        return view('pages.blog-folder.createBlog');
    }
    public function postBlog(Request $request) {        
        
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $fileImage = time().'.'.$request->image->extension();

        // Public Folder
        $request->image->move(public_path('blog-images'), $fileImage);

        // //Store in Storage Folder
        //$request->image->storeAs('public/images', $fileImage);

        // // Store in S3
        // $request->image->storeAs('images', $$fileImage, 's3');

        //Store IMage in DB 
        $data = new Blog;

        $data->blog_title = request('blog_title');
        /* $data->blog_image = request('blog_image'); */
        $data->blog_body = request('blog_body');
        $data->save();

        return redirect()->back()->with("msg", "blog posted successfully");
    }

    /* ** -- update blogs ** */
    public function updateBlogContent($id) {
        $updateBlogContent = Blog::find($id);

        $updateBlogContent->blog_title = request('blog_title');
        /* $updateBlogContent->image = request('image'); */
        $updateBlogContent->editor = request('editor');
        $updateBlogContent->update();

        return redirect('/admin/view-blog')->back();
    }
}
