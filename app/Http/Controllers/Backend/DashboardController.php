<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        return view('backend.dashboard.list');
    }


    public function admin_home(Request $request)
    {
        return view('backend.dashboard.list2');
    }



    public function admin_about(Request $request)
    {
        return view('backend.dashboard.about');
    }



    public function admin_portfolio(Request $request)
    {
        return view('backend.dashboard.portfolio');
    }



    public function admin_contact(Request $request)
    {
        return view('backend.dashboard.contact');
    }



    public function admin_blog(Request $request)
    {
        return view('backend.dashboard.blog');
    }
}
