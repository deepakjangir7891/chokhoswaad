<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public  function about()
    {
        return view('about');
    }
    public  function contact()
    {
        return view('contact-us');
    }

    public function blog()
    {
        return view('blog');
    }
    public function showBlog($slug)
    {
        return view('show-blog');
    }
    public function product()
    {
        return view('product');
    }
    public function service()
    {
        return view('service');
    }

    public  function addCart()
    {
        return view('addCart');
    }
}
