<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\HomeAbout;
use App\Models\Multipic;

use Auth;


class AboutController extends Controller
{
    //
    public function index()
    {
        $homeabouts = HomeAbout::latest()->get();
        return view('admin.homeabout.index',compact('homeabouts'));
    }
    public function addAbout()
    {
        return view('admin.homeabout.create');
    }
    public function editAbout($id)
    {
          $homeabouts = HomeAbout::find($id);
          return view('admin.homeabout.edit',compact('homeabouts'));
    }
    public function storeAbout(Request $request)
    {
        $validatedData = $request->validate([
            'title'=> 'required|min:4',
            'short_dis'=> 'required|min:4',
            'long_dis'=> 'required|min:4',

        ]);
        
         HomeAbout::insert([
                  'title' => $request->title,
                  'short_dis' => $request->short_dis,
                  'long_dis' => $request->long_dis,
                  'created_at' => Carbon::now(),
         ]);
         $notification = array(
            'message' => 'About Data Inserted Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('home.about')->with($notification);
    }
    public function updateAbout(Request $request,$id)
    {
        $validatedData = $request->validate([
            'title'=> 'required|min:4',
            'short_dis' => 'required',
            'long_dis' => 'required',
           
        ],
        [
         'title.required'=> 'Please Input Brand Name',
         'title.min'=> 'Please Ateast Input 4 Character',
        ]); 
                HomeAbout::find($id)->update([
                 'title' => $request->title,
                 'short_dis' => $request->short_dis,
                 'long_dis' => $request->long_dis,
                 'created_at' => Carbon::now(),
       ]);   
         
       $notification = array(
        'message' => 'About Data Updated Successfully',
        'alert-type' => 'success'
    );
    return Redirect()->route('home.about')->with($notification);
        
    }
    public function deleteAbout($id)
    {
         $image = HomeAbout::find($id);
         HomeAbout::find($id)->delete();
         $notification = array(
            'message' => 'About Data Deleted Successfully',
            'alert-type' => 'error'
        );
        return Redirect()->back()->with($notification);
    }
    public function portfolio()
    {
        $images = Multipic::all();
        return view('pages.portfolio',compact('images'));
    }
}
