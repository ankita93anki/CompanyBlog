<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

   
    //Eloquent ORM
    public function allcat()
    {
        $categories = Category::latest()->latest()->paginate(5);
        $trachCat = Category::onlyTrashed()->latest()->paginate(3);
    
        return view('admin.category.index',compact('categories','trachCat'));
    }
    

    //Query Builder
    
   /* public function allcat()
    {
        
        $categories = DB::table('categories')->join('users','categories.user_id','users.id')
           ->select('categories.*','users.name')->latest()->paginate(5);
        return view('admin.category.index',compact('categories'));
    }*/
   /* public function addcat(Request $request)
    {
           $validatedData = $request->validate([
               'category_name'=> 'required|unique:categories|max:255',

           ],
           [
            'category_name.required'=> 'Please Fill The Category',
            'category_name.max'=> 'Please Fill Maximum Size 255',

           ]
        );
          Category::insert([

            'category_name' => $request->category_name,
             'user_id' => Auth::user()->id,
             'created_at' => Carbon::now(),

         ]);
        

        return Redirect()->back()->with('success','Category Inserted Successfully');

    }
    */
    /*public function addcat(Request $request)
    {
           $validatedData = $request->validate([
               'category_name'=> 'required|unique:categories|max:255',

           ],
           [
            'category_name.required'=> 'Please Fill The Category',
            'category_name.max'=> 'Please Fill Maximum Size 255',

           ]
        );
        
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['user_id'] = Auth::user()->id;
        DB::table('categories')->insert($data);

        return Redirect()->back()->with('success','Category Inserted Successfully');

    }
    */

    //Another eloquent ORM Method
    public function addcat(Request $request)
    {
           $validatedData = $request->validate([
               'category_name'=> 'required|unique:categories|max:255',

           ],
           [
            'category_name.required'=> 'Please Fill The Category',
            'category_name.max'=> 'Please Fill Maximum Size 255',

           ]
        );
        $category = new Category;
        $category->category_name = $request->category_name;
        $category->user_id = Auth::user()->id;
        $category->save();
        $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('all.category')->with($notification);

    }
    //Eloquent ORM EDIT Data
  /*  public function edit($id)
    {
        $categories = Category::find($id);
        return view('admin.category.edit',compact('categories'));

    }
  */
  public function edit($id)
  {
      $categories = DB::table('categories')->where('id',$id)->first();
      return view('admin.category.edit',compact('categories'));

  }
  /*  public function categoryupdate(Request $request,$id)
    {
        $update = Category::find($id)->update([
            'category_name'=> $request->category_name,
            'user_id' => Auth::user()->id,


        ]);
        return redirect()->route('all.category')->with('success','Category Updated Successfully');

    }
  */
  public function categoryupdate(Request $request, $id)
  {
      $data = array();
      $data['category_name'] = $request->category_name;
      $data['user_id'] = Auth::user()->id;
      DB::table('categories')->where('id',$id)->update($data);
      $notification = array(
        'message' => 'Category Updated Successfully',
        'alert-type' => 'success'
    );
    return Redirect()->route('all.category')->with($notification);
  }
  //softdelete
  public function softdelete($id)
  {
      $delete = Category::find($id)->delete();
      $notification = array(
        'message' => 'Category Deleted Successfully',
        'alert-type' => 'error'
    );
    return Redirect()->back()->with($notification);
  }
  public function restore($id)
  {
      $delete = Category::withTrashed()->find($id)->restore();
      $notification = array(
        'message' => 'Category Restored Successfully',
        'alert-type' => 'success'
    );
    return Redirect()->back()->with($notification);
      
  }
  public function forcedelete($id)
  {
      $hdelete = Category::onlyTrashed()->find($id)->forceDelete();
      $notification = array(
        'message' => 'Category Force Deleted Successfully',
        'alert-type' => 'success'
    );
    return Redirect()->back()->with($notification);

  }
}
