<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Slider;
use Auth;
use Image;

class HomeController extends Controller
{
    //
    public function homeSlider()
    {
        $sliders = Slider::latest()->get();
        return view('admin.slider.index',compact('sliders'));
    }
    public function addSlider()
    {
        return view('admin.slider.create');
    }
    public function storeSlider(Request $request)
    {
        $validatedData = $request->validate([
            'title'=> 'required|min:4',
            'description'=> 'required|min:4',
            'image'=> 'required|mimes:jpg,jpeg,png',

        ],
        [
         'title.required'=> 'Please Input Title',
         'title.min'=> 'Please Ateast Input 4 Character',
         'image.required'=> 'Please Select Slider Image',
         

        ]);
         $slider_image = $request->file('image');

         $name_gen = hexdec(uniqid()).'.'.$slider_image->getClientOriginalExtension();
         Image::make($slider_image)->resize(1920,1080)->save('image/slider/'.$name_gen);
         $last_image = 'image/slider/'.$name_gen;
         Slider::insert([
                  'title' => $request->title,
                  'description' => $request->description,
                  'image' => $last_image,
                  'created_at' => Carbon::now(),
         ]);
         $notification = array(
            'message' => 'Slider Data Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('home.slider')->with($notification);
         
    }
    public function editSlider($id)
    {
          $sliders = Slider::find($id);
          return view('admin.slider.edit',compact('sliders'));
    }
    public function updateSlider(Request $request,$id)
    {
        $validatedData = $request->validate([
            'title'=> 'required|min:4',
            'description' => 'required',
            
           
        ],
        [
         'title.required'=> 'Please Input Brand Name',
         'title.min'=> 'Please Ateast Input 4 Character',
         
         

        ]);
         $old_image = $request->old_image;
         $slider_image = $request->file('image');
         if($slider_image)
         {
            $name_gen = hexdec(uniqid()).'.'.$slider_image->getClientOriginalExtension();
            Image::make($slider_image)->resize(300,200)->save('image/slider/'.$name_gen);
            $last_image = 'image/slider/'.$name_gen;
            // $name_gen = hexdec(uniqid());
            // $img_ext = strtolower($brand_image->getClientOriginalExtension());
            // $img_name = $name_gen.'.'.$img_ext;
            // $up_location = 'image/brand/';
            // $last_image = $up_location.$img_name;
            // $brand_image->move($up_location,$img_name);
            unlink($old_image);
            Slider::find($id)->update([
                     
                     'title' => $request->title,
                     'description' => $request->description,
                     'image' => $last_image,
                     'created_at' => Carbon::now(),
            ]);
         }
         else
         {
                 Slider::find($id)->update([
                 'title' => $request->title,
                 'description' => $request->description,
                 'created_at' => Carbon::now(),
       ]);   
         }
        
         $notification = array(
            'message' => 'Slider Data Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('home.slider')->with($notification);
         
         
    }
    public function deleteSlider($id)
    {
         $image = Slider::find($id);
         $old_image = $image->image;
         unlink($old_image);
         Slider::find($id)->delete();
         $notification = array(
            'message' => 'Slider Data Deleted Successfully',
            'alert-type' => 'error'
        );
        return Redirect()->route('home.slider')->with($notification);
         
         
    }
}
