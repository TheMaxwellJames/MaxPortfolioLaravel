<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;
use App\Models\BlogModel;

class BlogController extends Controller
{
    public function admin_blog_add(Request $request)
    {
            return view('backend.dashboard.blog_add');
    }



    public function admin_blog_add_post(Request $request)
    {
        // dd($request->all());

        $insertRecord = new BlogModel;

        $insertRecord->title = trim($request->title);

        $insertRecord->description = trim($request->description);


        if(!empty($request->file('image')))
        {
            $file = $request->file('image');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' .$file->getClientOriginalExtension();


            $file->move('public/blog/', $filename);

            $insertRecord->image =$filename;
        }

        $insertRecord->save();

        return redirect('admin/blog')->with('success', 'Blog Successfully Saved');



    }



    public function admin_blog_delete(Request $request, $id)
    {
        $removeDelete = BlogModel::find($id);

        $removeDelete->delete();

        return redirect()->back()->with('error', 'Deleted Successfully');
    }
}
