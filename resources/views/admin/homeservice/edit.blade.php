@extends('admin.admin_master')
@section('admin')
   <div class="py-12">
        <div class="container">
           <div class="row">
               <div class="col-lg-12">
                    <div class="card card-default">
                        <div class="card-header card-header-border-bottom">
                            <h2>Update Home Service</h2>
                        </div>
                        <div class="card-body">
                           <form action="{{ url('home/service/update/'.$homeservices->id) }}" method="POST" 
                              enctype="multipart/form-data">
                               @csrf
                                <div class="form-group">
                                   
                                    <label for="exampleFormControlInput1">Service Title</label>
                                    <input type="text" name="title" class="form-control" 
                                     id="exampleFormControlInput1" value="{{ $homeservices->title }}"
                                     placeholder="Enter Title">
                                    <span class="mt-2 d-block"></span>
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Service Description</label>
                                    <textarea class="form-control" name="description" 
                                    id="exampleFormControlTextarea1" rows="3">{{ $homeservices->description }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                   
                                    <label for="exampleFormControlInput1">Service Icon</label>
                                    <input type="text" name="icoon" class="form-control" 
                                     id="exampleFormControlInput1" value="{{ $homeservices->icoon }}"
                                     placeholder="Enter Icon">
                                    <span class="mt-2 d-block"></span>
                                    @error('icoon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                                    <button type="submit" class="btn btn-primary btn-default">Update</button>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
              </div>
           </div>
      </div>
   </div>
@endsection