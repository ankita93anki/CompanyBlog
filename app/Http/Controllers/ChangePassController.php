<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Image;

class ChangePassController extends Controller
{
    public function cPass()
    {
        return view('admin.body.change_password');
    }
    public function updatePassword(Request $request)
    {
          $validateData = $request->validate([
              'current_password' => 'required',
              'password' => 'required|confirmed',
              
          ]);

          $hashedPassword = Auth::user()->password;
          if(Hash::check($request->current_password,$hashedPassword))
          {
                   $user = User::find(Auth::id());
                   $user->password = Hash::make($request->password);
                   $user->save();
                   Auth::logout();
                   $notification = array(
                    'message' => 'Password Changed Successfully',
                    'alert-type' => 'success'
                );
                   
          }
          else
          {
            $notification = array(
                'message' => 'Password Has Not Changed Successfully',
                'alert-type' => 'warning'
            ); 
          }
         
        return Redirect()->back()->with($notification);
    }

    public function pUpdate()
    {
        if(Auth::user())
        {
            $user = User::find(Auth::user()->id);
            if($user)
            {
                return view('admin.body.update_profile',compact('user'));
            }
        }
    }

    public function updateProfile(Request $request)
    {
          $user = User::find(Auth::user()->id);
          $old_image = $request->old_image;
          $pimage = $request->file('profile_photo_path');
         if($pimage)
         {
            $name_gen = hexdec(uniqid()).'.'.$pimage->getClientOriginalExtension();
            Image::make($pimage)->resize(300,200)->save('image/profile/'.$name_gen);
            $last_image = 'image/profile/'.$name_gen;
            //unlink($old_image);
            $user->name = $request['name'];
            $user->profile_photo_path = $last_image;
            $user->email = $request['email'];
            $user->save();
            $notification = array(
                'message' => 'Profile Updated Successfully',
                'alert-type' => 'success'
            );
              
         }
         else
         {

                 
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->save();
            $notification = array(
                'message' => 'Profile Updated Successfully',
                'alert-type' => 'success'
            );
              
           
         }
         return Redirect()->back()->with($notification);
        
    }
}
  