<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeModel;
use App\Models\AboutModel;
use App\Models\ExperienceModel;
use App\Models\PortfolioModel;
use App\Models\ContactModel;
use App\Models\BlogModel;
use App\Models\Social_iconModel;
use Mail;
use App\Mail\Mail\ContactMail;

class HomeController extends Controller
{
    public function index()
    {
        $data['getrecord'] = HomeModel::all();
        $data['meta_title'] = 'Home';
        return view('index.index', $data);
    }


    public function about()
    {

        $data['getrecord'] = AboutModel::all();

        $data['experienceRecords'] = ExperienceModel::all();

        $data['meta_title'] = 'About Me';
        return view('index.about', $data,);
    }


    public function portfolio()
    {
        $data['getrecord'] = PortfolioModel::get();
        $data['meta_title'] = 'My Portfolio';
        return view('home.portfolio', $data);
    }



    public function contact()
    {

        $data['getrecord'] = Social_iconModel::find(1);
        $data['meta_title'] = 'Contact Me';
        return view('home.contact', $data);
    }


    public function contact_post(Request $request)
    {
        // dd($request->all());

        $insertRecord = new ContactModel;

        $insertRecord->name = trim($request->name);

        $insertRecord->email = trim($request->email);

        $insertRecord->subject = trim($request->subject);

        $insertRecord->message = trim($request->message);

        $insertRecord->save();

        Mail::to('maxichanj@gmail.com')->send(new ContactMail($request));

        return redirect()->back()->with('success', 'Your Message Has Been Sent To Maxwell');
    }









    public function blog()
    {
         $data['getrecord'] = BlogModel::get();
        $data['meta_title'] = 'My Blog';
        return view('home.blog', $data);
    }



    public function blog_post(Request $request, $id)
    {

        $data['getrecord'] = BlogModel::find($id);
        $data['meta_title'] = 'Blog-Post';
        return view('home.blog_post', $data);
    }




    public function newsletter()
    {
        $data['meta_title'] = 'Home';
        return view('home.newsletter', $data);
    }




}
