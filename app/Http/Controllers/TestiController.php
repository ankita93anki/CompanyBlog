<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Testi;
use App\Models\Multipic;
use Auth;
use Image;

class TestiController extends Controller
{
    
    public function index()
    {
        $testis = Testi::latest()->paginate(5);
        return view('admin.testi.index', compact('testis'));
    }
    public function storeTesti(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required|min:4',
            'position'=> 'required|min:4',
            'image'=> 'required',
            'des'=> 'required'

        ]);
         $profile_image = $request->file('image');

         $name_gen = hexdec(uniqid()).'.'.$profile_image->getClientOriginalExtension();
         Image::make($profile_image)->resize(300,200)->save('image/testi/'.$name_gen);
         $last_image = 'image/testi/'.$name_gen;
         Testi::insert([
                  'name' => $request->name,
                  'position' => $request->position,
                  'image' => $last_image,
                  'des' => $request->des,
                  'created_at' => Carbon::now(),
         ]);
         $notification = array(
             'message' => 'Testimonial Data Inserted Successfully',
             'alert-type' => 'success'
         );
         return Redirect()->back()->with($notification);
    }
    public function editTesti($id)
    {
          $testis = Testi::find($id);
          return view('admin.testi.edit',compact('testis'));
    }
    public function testiUpdate(Request $request,$id)
    {
        
         $old_image = $request->old_image;
         $profile_image = $request->file('image');
         if($profile_image)
         {
            $name_gen = hexdec(uniqid()).'.'.$profile_image->getClientOriginalExtension();
            Image::make($profile_image)->resize(300,200)->save('image/testi/'.$name_gen);
            $last_image = 'image/testi/'.$name_gen;
            unlink($old_image);
            Testi::find($id)->update([
                     'name' => $request->name,
                     'position' => $request->position,
                     'image' => $last_image,
                     'des' => $request->des,
                     'created_at' => Carbon::now(),
            ]);
         }
         else
         {
                 Testi::find($id)->update([
                'name' => $request->name,
                'position' => $request->position,
                'des' => $request->des,
                'created_at' => Carbon::now(),
           ]);   
           
         }
        
         $notification = array(
            'message' => 'Testimonial Data Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('admin.testi')->with($notification);
    }
    public function deleteTesti($id)
    {
         $image = Testi::find($id);
         $old_image = $image->image;
         unlink($old_image);
         Testi::find($id)->delete();
         $notification = array(
            'message' => 'Testimonial Data Deleted Successfully',
            'alert-type' => 'error'
        );
        return Redirect()->back()->with($notification);
         
    }
}
