<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
     public function getRouteKeyName()
    {
        return 'blog_title'; // db column name you would like to appear in the url.
    }
}
