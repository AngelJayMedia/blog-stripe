<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('pages.posts.index');
    }

    public function show()
    {
        return view('pages.posts.show');
    }
}
