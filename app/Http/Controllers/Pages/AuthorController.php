<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return view('pages.authors.index');
    }

    public function show()
    {
        return view('pages.authors.show');
    }
}
