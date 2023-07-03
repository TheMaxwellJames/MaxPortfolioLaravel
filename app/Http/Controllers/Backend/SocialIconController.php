<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Social_iconModel;

class SocialIconController extends Controller
{
    public function admin_social_icon(Request $request)
    {

        $data['getrecord'] = Social_iconModel::find(1);
        return view('backend.social_icon.update', $data);
    }



    public function admin_social_icon_update(Request $request, $id)
    {
        // dd($request->all());


        $updaterecord = Social_iconModel::find($id);

        $updaterecord->name = trim($request->name);

        
        $updaterecord->email = trim($request->email);

        
        $updaterecord->mobile = trim($request->mobile);

        
        $updaterecord->facebook = trim($request->facebook);

        
        $updaterecord->twitter = trim($request->twitter);

        
        $updaterecord->instagram = trim($request->instagram);


        
        $updaterecord->github = trim($request->github);


        $updaterecord->save();


        Return redirect()->back()->with('success', 'Successfully Updated Records');


    }

}
