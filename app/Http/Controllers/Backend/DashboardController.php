<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\HomeModel;
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
