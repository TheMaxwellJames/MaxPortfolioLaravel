<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;

use App\Models\PortfolioModel;

class PortfolioController extends Controller
{
    public function portfolio_add(Request $request)
    {
        return view('backend.dashboard.portfolio_add'); 
    }



    
    public function portfolio_add_post(Request $request)
    {
        // dd($request->all()); 

        $insertRecord = new PortfolioModel;

        $insertRecord->title = trim($request->title);


        if(!empty($request->file('image')))
        {

            
            $file = $request->file('image');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();

            $file->move('public/portfolio/', $filename);
            $insertRecord->image =$filename;
        }

        $insertRecord->save();

        return redirect('admin/portfolio')->with('success', 'Successfully Saved');

    }
}
