<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\HomeModel;
use App\Models\AboutModel;
use Str;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        return view('backend.dashboard.list');
    }


    public function admin_home(Request $request)
    {

        $data['getrecord'] = HomeModel::all();
        return view('backend.dashboard.list2', $data);
    }

        public function admin_home_post(Request $request)
        {

            // dd($request->all());

            if($request->add_to_update == "Add")
            {

                $insertRecord = request()->validate([
                    'profile'    => 'required'
                ]);

                $insertRecord = new HomeModel;

            }else{
                   
                $insertRecord = HomeModel::find($request->id);

            }

           

            $insertRecord->your_name = trim($request->your_name);
            $insertRecord->work_experience = trim($request->work_experience);
            $insertRecord->description = trim($request->description);


            if(!empty($request->file('profile')))
            {

                if(!empty($insertRecord->profile) && file_exists('public/img/' . $insertRecord->profile))

                {
                    unlink('public/img/'. $insertRecord->profile);
                }
                

                $file = $request->file('profile');
                $randomStr = Str::random(30);
                $filename = $randomStr . '.' . $file->getClientOriginalExtension();

                $file->move('public/img/', $filename);
                $insertRecord->profile =$filename;
            }

            $insertRecord->save();

            return redirect()->back()->with('success', 'Successfully Saved');




        }





    public function admin_about(Request $request)
    {
        return view('backend.dashboard.about');
    }



    public function admin_about_post(Request $request)
    {
        //dd($request->all());

        $insertRecord = new AboutModel;
        $insertRecord->first_name = trim($request->first_name);
        $insertRecord->last_name = trim($request->last_name);
        $insertRecord->age = trim($request->age);
        $insertRecord->nationality = trim($request->nationality);
        $insertRecord->freelance = trim($request->freelance);
        $insertRecord->address = trim($request->address);
        $insertRecord->	phone = trim($request->phone);
        $insertRecord->	email = trim($request->email);
        $insertRecord->github = trim($request->github);
        $insertRecord->years_of_experience = trim($request->years_of_experience);
        $insertRecord->completed_projects = trim($request->completed_projects);
        $insertRecord->happy_customers = trim($request->happy_customers);
        $insertRecord->awards_won = trim($request->awards_won);
        $insertRecord->html = trim($request->html);
        $insertRecord->javascript = trim($request->javascript);
        $insertRecord->css = trim($request->css);
        $insertRecord->php = trim($request->php);
        $insertRecord->laravel = trim($request->laravel);
        $insertRecord->flutter = trim($request->flutter);
        $insertRecord->python = trim($request->python);
        $insertRecord->django = trim($request->django);
        $insertRecord->year_of_experience = trim($request->year_of_experience);
        $insertRecord->title = trim($request->title);
        $insertRecord->sub_title = trim($request->sub_title);
        $insertRecord->description = trim($request->description);


        $insertRecord->save();

        return redirect()->back()->with('success', 'Successfully Saved');
        

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
