<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Brand;
use App\Models\Multipic;
use Auth;
use Image;

class BrandController extends Controller
{
    
  
    
    public function allbrand()
    {
        $brands = Brand::latest()->paginate(5);
        return view('admin.brand.index', compact('brands'));
    }
    public function storebrand(Request $request)
    {
        $validatedData = $request->validate([
            'brand_name'=> 'required|unique:brands|min:4',
            'brand_image'=> 'required|mimes:jpg.jpeg,png',

        ],
        [
         'brand_name.required'=> 'Please Input Brand Name',
         'brand_name.min'=> 'Please Ateast Input 4 Character',
         'brand_image.required'=> 'Please Select Brand Image',
         

        ]);
         $brand_image = $request->file('brand_image');
         $name_gen = hexdec(uniqid()).'.'.$brand_image->getClientOriginalExtension();
         Image::make($brand_image)->resize(300,200)->save('image/brand/'.$name_gen);
         $last_image = 'image/brand/'.$name_gen;
         Brand::insert([
                  'brand_name' => $request->brand_name,
                  'brand_image' => $last_image,
                  'created_at' => Carbon::now(),
         ]);
         $notification = array(
             'message' => 'Brand Inserted Successfully',
             'alert-type' => 'success'
         );
         return Redirect()->back()->with($notification);
    }
    public function editbrand($id)
    {
          $brands = Brand::find($id);
          return view('admin.brand.edit',compact('brands'));
    }
    public function brandupdate(Request $request,$id)
    {
        $validatedData = $request->validate([
            'brand_name'=> 'required|min:4',
           
        ],
        [
         'brand_name.required'=> 'Please Input Brand Name',
         'brand_name.min'=> 'Please Ateast Input 4 Character',
         
         

        ]);
         $old_image = $request->old_image;
         $brand_image = $request->file('brand_image');
         if($brand_image)
         {
            $name_gen = hexdec(uniqid()).'.'.$brand_image->getClientOriginalExtension();
            Image::make($brand_image)->resize(300,200)->save('image/brand/'.$name_gen);
            $last_image = 'image/brand/'.$name_gen;
            unlink($old_image);
            Brand::find($id)->update([
                     'brand_name' => $request->brand_name,
                     'brand_image' => $last_image,
                     'created_at' => Carbon::now(),
            ]);
         }
         else
         {
                 Brand::find($id)->update([
                'brand_name' => $request->brand_name,
                
                'created_at' => Carbon::now(),
           ]);   
         }
         $notification = array(
            'message' => 'Brand Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('all.brand')->with($notification);
    }
    public function deletebrand($id)
    {
         $image = Brand::find($id);
         $old_image = $image->brand_image;
         unlink($old_image);
         Brand::find($id)->delete();
         $notification = array(
            'message' => 'Brand Deleted Successfully',
            'alert-type' => 'error'
        );
        return Redirect()->back()->with($notification);
    }
    public function allMultiImage()
    {
        $images = Multipic::all();
        return view('admin.multipic.index',compact('images'));
    }
    public function storeMultiImage(Request $request)
    {
        $validatedData = $request->validate([
            'category'=> 'required',
            'image'=> 'required',

        ]);
         $image = $request->file('image');
         foreach($image as $multi_img)
         {
             $name_gen = hexdec(uniqid()).'.'.$multi_img->getClientOriginalExtension();
             Image::make($multi_img)->resize(300,300)->save('image/multi/'.$name_gen);
             $last_image = 'image/multi/'.$name_gen;
             Multipic::insert([
                  'category' => $request->category,
                  'image' => $last_image,
                  'created_at' => Carbon::now(),
             ]);
          }
          $notification = array(
            'message' => 'Portfolio Images Inserted Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('all.multiimage')->with($notification);
        
    }
    public function logout()
    {
        Auth::logout();
        $notification = array(
            'message' => 'User Logout Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('login')->with($notification);
        
    }
}
