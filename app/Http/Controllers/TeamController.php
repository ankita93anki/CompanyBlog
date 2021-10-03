<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Team;
use App\Models\Multipic;
use Auth;
use Image;

class TeamController extends Controller
{
    
    public function index()
    {
        $teams = Team::latest()->paginate(5);
        return view('admin.teamtest.index', compact('teams'));
    }
    public function storeTeam(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required|min:4',
            'image'=> 'required',
            'pro_post'=> 'required'

        ]);
         $profile_image = $request->file('image');

         $name_gen = hexdec(uniqid()).'.'.$profile_image->getClientOriginalExtension();
         Image::make($profile_image)->resize(300,200)->save('image/team/'.$name_gen);
         $last_image = 'image/team/'.$name_gen;
         Team::insert([
                  'name' => $request->name,
                  'image' => $last_image,
                  'post' => $request->pro_post,
                  'created_at' => Carbon::now(),
         ]);
         $notification = array(
             'message' => 'Team Data Inserted Successfully',
             'alert-type' => 'success'
         );
         return Redirect()->back()->with($notification);
    }
    public function editTeam($id)
    {
          $teams = Team::find($id);
          return view('admin.teamtest.edit',compact('teams'));
    }
    public function teamUpdate(Request $request,$id)
    {
        $validatedData = $request->validate([
            'name'=> 'required|min:4',
            'pro_post'=> 'required'
        ]);
         $old_image = $request->old_image;
         $profile_image = $request->file('image');
         if($profile_image)
         {
            $name_gen = hexdec(uniqid()).'.'.$profile_image->getClientOriginalExtension();
            Image::make($profile_image)->resize(300,200)->save('image/team/'.$name_gen);
            $last_image = 'image/team/'.$name_gen;
            unlink($old_image);
            Team::find($id)->update([
                     'name' => $request->name,
                    
                     'image' => $last_image,
                     'post' => $request->pro_post,
                     'created_at' => Carbon::now(),
            ]);
         }
         else
         {
                 Team::find($id)->update([
                'name' => $request->name,
                'post' => $request->pro_post,
                'created_at' => Carbon::now(),
           ]);   
           
         }
        
         $notification = array(
            'message' => 'Team Data Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('admin.team')->with($notification);
    }
    public function deleteTeam($id)
    {
         $image = Team::find($id);
         $old_image = $image->image;
         unlink($old_image);
         Team::find($id)->delete();
         $notification = array(
            'message' => 'Team Data Deleted Successfully',
            'alert-type' => 'error'
        );
        return Redirect()->back()->with($notification);
         
    }
}
