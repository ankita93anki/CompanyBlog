<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\HomeService;
use Auth;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $homeservices = HomeService::latest()->get();
        return view('admin.homeservice.index',compact('homeservices'));
    }
    public function addService()
    {
        return view('admin.homeservice.create');
    }
    public function editService($id)
    {
          $homeservices = HomeService::find($id);
          return view('admin.homeservice.edit',compact('homeservices'));
    }
    public function storeService(Request $request)
    {
        $validatedData = $request->validate([
            'title'=> 'required|min:4',
            'description'=> 'required|min:4',
            'icoon'=> 'required',

        ]);
        
         HomeService::insert([
                  'title' => $request->title,
                  'description' => $request->description,
                  'icoon' => $request->icoon,
                  'created_at' => Carbon::now(),
         ]);
         $notification = array(
            'message' => 'Service Data Added Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('home.service')->with($notification);
         
         
    }
    public function updateService(Request $request,$id)
    {
        $validatedData = $request->validate([
            'title'=> 'required|min:4',
            'description' => 'required',
            'icoon' => 'required',
           
        ],
        [
         'title.required'=> 'Please Input Brand Name',
         'title.min'=> 'Please Ateast Input 4 Character',
        ]); 
                HomeService::find($id)->update([
                 'title' => $request->title,
                 'description' => $request->description,
                 'icoon' => $request->icoon,
                 'created_at' => Carbon::now(),
       ]);   
         
       $notification = array(
           'message' => 'Service Data Updated Successfully',
           'alert-type' => 'success'
        );
    return Redirect()->route('home.service')->with($notification);
     
    }
    public function deleteService($id)
    {
         $image = HomeService::find($id);
         HomeService::find($id)->delete();
         $notification = array(
            'message' => 'Service Data Deleted Successfully',
            'alert-type' => 'error'
        );
        return Redirect()->route('home.service')->with($notification);
         
         
    }
}
