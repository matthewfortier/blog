<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function getIndex() {
        $posts = Post::all();
        return view('index')->with('posts', $posts);
    }

    public function getAbout() {
        return view('static/about');
    }

    public function getContact() {
        return view('static/contact');
    }
}
