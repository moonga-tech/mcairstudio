<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreateBlog;

class AdminController extends Controller
{
    public function viewBlog() {
        $blog = CreateBlog::all();

        return view('admin.view-blog', ['blog' => $blog]);
    }
    public function updateBlog($id) {
        $fetchBlog = CreateBlog::find($id);

        return view('admin.update-blog', ['fetchBlog' => $fetchBlog]);
    }
}
