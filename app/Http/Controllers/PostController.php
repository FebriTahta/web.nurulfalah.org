<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post_detail($contoh)
    {
        return view('berita_artikel.post');
    }
}
