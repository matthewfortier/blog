<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex() {
        return view('index');
    }

    public function getAbout() {
        return view('static/about');
    }

    public function getContact() {
        return view('static/contact');
    }
}
