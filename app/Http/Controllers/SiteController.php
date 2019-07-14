<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        // $data = '<p style="background: red;"> this is my home page</p>';

        $data = '<script>alert("jdfljalsdjfl")</script>';

        return view('site.home', compact('data'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function extra()
    {
        return view('extra');
    }
}

