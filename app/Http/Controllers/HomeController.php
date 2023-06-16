<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }


    public function about()
    {
        return view('home.about');
    }


    public function portfolio()
    {
        return view('home.portfolio');
    }



    public function contact()
    {
        return view('home.contact');
    }




    
    public function blog()
    {
        return view('home.blog');
    }
    
}
