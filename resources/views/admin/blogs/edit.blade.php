@extends('admin.admin_master')
@section('admin')
   <div class="py-12">
        <div class="container">
           <div class="row">
               <div class="col-lg-12">
                    <div class="card card-default">
                        <div class="card-header card-header-border-bottom">
                            <h2>Update Blogs</h2>
                        </div>
                        <div class="card-body">
                           <form action="{{ url('blog/update/'.$blogs->id) }}" method="POST" 
                              enctype="multipart/form-data">
                               @csrf
                                <div class="form-group">
                                   <input type="hidden" name="old_image" value="{{ $blogs->image }}"/>
                                    <label for="exampleFormControlInput1">Blog Title</label>
                                    <input type="text" name="title" class="form-control" 
                                     id="exampleFormControlInput1" value="{{ $blogs->title }}"
                                     placeholder="Enter Title">
                                    <span class="mt-2 d-block"></span>
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Blog Description</label>
                                    <textarea class="form-control" name="description" value="{{ $blogs->description }}"
                                    id="exampleFormControlTextarea1" rows="3">{{ $blogs->description }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Blog Image</label>
                                    <input type="file" name="image" class="form-control-file" 
                                    id="exampleFormControlFile1">
                                    @error('image')
                                           <span class="text-danger">{{ $message }}</span>
                                    @enderror                              
                                </div>
                                <div class="form-group">
                                    <img src="{{asset($blogs->image)}}" style="width:400px;height:200px"/>
                                </div>
                                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                                    <button type="submit" class="btn btn-primary btn-default">Update Blog</button>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
              </div>
           </div>
      </div>
   </div>
@endsection