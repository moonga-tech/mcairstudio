<?php

namespace App\Http\Controllers;

use App\Models\CreateBlog;
use Illuminate\Http\Request;

class CreateBlogController extends Controller
{
    public function createBlog() {
        return view('pages.blog-folder.createBlog');
    }
    public function postBlog(Request $request) {        
        /* $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);
        $imageName = time().'.'.$request->image->extension(); */

        $data = new CreateBlog;

        $data->blog_title = request('blog_title');
        /* $data->image = request('image'); */
        $data->editor = request('editor');
        $data->save();

        return redirect()->back()->with("msg", "blog posted successfully");
    }

    /* ** -- update blogs ** */
    public function updateBlogContent($id) {
        $updateBlogContent = CreateBlog::find($id);

        $updateBlogContent->blog_title = request('blog_title');
        /* $updateBlogContent->image = request('image'); */
        $updateBlogContent->editor = request('editor');
        $updateBlogContent->update();

        return redirect('/admin/view-blog')->back();
    }
}