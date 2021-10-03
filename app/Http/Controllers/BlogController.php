<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Blog;
use App\Models\User;
use Auth;
use Image;

class BlogController extends Controller
{
    //
    public function homeBlog()
    {
        $blogs = Blog::latest()->get();
       
        
        return view('admin.blogs.index',compact('blogs'));
    }
    public function addBlog()
    {
        return view('admin.blogs.create');
    }
    public function storeBlog(Request $request)
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
         $blog_image = $request->file('image');

         $name_gen = hexdec(uniqid()).'.'.$blog_image->getClientOriginalExtension();
         Image::make($blog_image)->resize(1920,1080)->save('image/blogs/'.$name_gen);
         $last_image = 'image/blogs/'.$name_gen;
         Blog::insert([
                  'user_name' => Auth::user()->name,
                  'title' => $request->title,
                  'description' => $request->description,
                  'image' => $last_image,
                  'created_at' => Carbon::now(),
         ]);
         $notification = array(
            'message' => 'Blog Data Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('home.blog')->with($notification);
         
    }
    public function editBlog($id)
    {
          $blogs = Blog::find($id);
          
          return view('admin.blogs.edit',compact('blogs'));
    }
    public function updateBlog(Request $request,$id)
    {
        $validatedData = $request->validate([
            
            'title'=> 'required|min:4',
            'description' => 'required',
            
           
        ],
        [
         'title.required'=> 'Please Input Title Name',
         'title.min'=> 'Please Ateast Input 4 Character',
         
         

        ]);
         $old_image = $request->old_image;
         $blog_image = $request->file('image');
         if($blog_image)
         {
            $name_gen = hexdec(uniqid()).'.'.$blog_image->getClientOriginalExtension();
            Image::make($blog_image)->resize(300,200)->save('image/blogs/'.$name_gen);
            $last_image = 'image/blogs/'.$name_gen;
            unlink($old_image);
            Blog::find($id)->update([
                     
                     'title' => $request->title,
                     'description' => $request->description,
                     'image' => $last_image,
                     'updated_at' => Carbon::now(),
            ]);
         }
         else
         {
                 Blog::find($id)->update([
                 
                 'title' => $request->title,
                 'description' => $request->description,
                 'updated_at' => Carbon::now(),
       ]);   
         }
        
         $notification = array(
            'message' => 'Blog Data Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('home.blog')->with($notification);
         
         
    }
    public function deleteBlog($id)
    {
         $image = Blog::find($id);
         $old_image = $image->image;
         unlink($old_image);
         Blog::find($id)->delete();
         $notification = array(
            'message' => 'Blog Data Deleted Successfully',
            'alert-type' => 'error'
        );
        return Redirect()->route('home.blog')->with($notification);
         
         
    }
}
