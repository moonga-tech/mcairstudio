<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreateBlog;

class AdminController extends Controller
{
     public function adminHome()
    {
        $data = CreateBlog::all();

        return view('admin.dashboard', ['data' => $data]);
    }

    public function viewBlog() {
        $data = CreateBlog::all();

        return view('admin.view-blog', ['data' => $data]);
    }
    public function updateBlog($id) {
        $fetchBlog = CreateBlog::find($id);

        return view('admin.update-blog', ['fetchBlog' => $fetchBlog]);
    }
}
