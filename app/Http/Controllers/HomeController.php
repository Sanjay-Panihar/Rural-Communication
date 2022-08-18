<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
      return view('home.index');
    }
    public function aboutUs()
    {
      return view('about.index');
    }
    public function services()
    {
      return view('services.index');
    }
    public function gallery()
    {
      return view('gallery.index');
    }
    public function blog()
    {
      return view('blog.index');
    }
    public function contactUs()
    {
      return view('contactUs.index');
    }
}
