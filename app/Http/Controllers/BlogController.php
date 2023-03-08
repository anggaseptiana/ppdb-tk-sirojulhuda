<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function tampil_blog()
    {
        return view('blog.index');
    }
}
