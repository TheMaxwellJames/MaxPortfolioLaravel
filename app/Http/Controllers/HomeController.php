<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeModel;
use App\Models\AboutModel;
use App\Models\PortfolioModel;

class HomeController extends Controller
{
    public function index()
    {
        $data['getrecord'] = HomeModel::all();
        $data['meta_title'] = 'Home';
        return view('home.index', $data);
    }


    public function about()
    {

        $data['getrecord'] = AboutModel::all();
        $data['meta_title'] = 'About Me';
        return view('home.about', $data);
    }


    public function portfolio()
    {
        $data['getrecord'] = PortfolioModel::get();
        $data['meta_title'] = 'My Portfolio';
        return view('home.portfolio', $data);
    }



    public function contact()
    {
        $data['meta_title'] = 'Contact Me';
        return view('home.contact', $data);
    }




    
    public function blog()
    {
        $data['meta_title'] = 'My Blog';
        return view('home.blog', $data);
    }



    public function blog_post()
    {
        $data['meta_title'] = 'Blog-Post';
        return view('home.blog_post', $data);
    }
    

      

}
