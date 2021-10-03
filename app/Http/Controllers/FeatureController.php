<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Feature;
use App\Models\Multipic;
use Auth;
use Image;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::latest()->paginate(5);
        return view('admin.feature.index', compact('features'));
    }
    public function storeFeature(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required|min:4',
            'icon'=> 'required',
           

        ]);
        
         Feature::insert([
                  'name' => $request->name,
                  'icon' => $request->icon,
                  'created_at' => Carbon::now(),
         ]);
         $notification = array(
             'message' => 'Features Data Inserted Successfully',
             'alert-type' => 'success'
         );
         return Redirect()->route('admin.feature')->with($notification);
    }
    public function editFeature($id)
    {
          $features = Feature::find($id);
          return view('admin.feature.edit',compact('features'));
    }
    public function featureUpdate(Request $request,$id)
    {
        $validatedData = $request->validate([
            'name'=> 'required|min:4',
            'icon'=> 'required',
            
        ]);
        
                 Feature::find($id)->update([
                'name' => $request->name,
                'icon' => $request->icon,
                'created_at' => Carbon::now(),
           ]);   
           
        $notification = array(
            'message' => 'Feature Data Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('admin.feature')->with($notification);
    }
    public function deleteFeature($id)
    {
        
         Feature::find($id)->delete();
         $notification = array(
            'message' => 'Features Data Deleted Successfully',
            'alert-type' => 'error'
        );
        return Redirect()->back()->with($notification);
         
    }
}
