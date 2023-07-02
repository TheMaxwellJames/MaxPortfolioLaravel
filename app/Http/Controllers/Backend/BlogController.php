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




    public function admin_blog_edit($id, Request $request)
    {

        $data['getrecord'] = BlogModel::find($id);
        return view('backend.dashboard.blog_edit', $data);
    }



    public function admin_blog_update($id, Request $request)
    {
        // dd($request->all());

        $updateRecord = BlogModel::find($id);

        $updateRecord->title = trim($request->title);


        if(!empty($request->file('image')))
        {

            if(!empty($updateRecord->image)  && file_exists('public/blog/'.$updateRecord->image))
            {
                unlink('public/blog/'.$updateRecord->image);
            }


            $file = $request->file('image');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' .$file->getClientOriginalExtension();


            $file->move('public/blog/', $filename);

            $updateRecord->image =$filename;
        }



        $updateRecord->description = trim($request->description);

        $updateRecord->save();

        return redirect('admin/blog')->with('success', 'Blog Updated Succcessfully');
    }











    public function admin_blog_delete(Request $request, $id)
    {
        $deleteRecord = BlogModel::find($id);

        if(!empty($deleteRecord->image)  && file_exists('public/blog/'.$deleteRecord->image))
     {
         unlink('public/blog/'.$deleteRecord->image);
    }

        $deleteRecord->delete();

        Return redirect()->back()->with('error', 'Successfully Deleted');
    }
}
