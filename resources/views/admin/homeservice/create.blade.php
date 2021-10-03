@extends('admin.admin_master')
@section('admin')
   <div class="py-12">
        <div class="container">
           <div class="row">
               <div class="col-lg-12">
                    <div class="card card-default">
                        <div class="card-header card-header-border-bottom">
                            <h2>Add New Home Service Section</h2>
                        </div>
                        <div class="card-body">
                           <form action="{{ route('store.home.service') }}" method="POST" enctype="multipart/form-data">
                             @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Service Title</label>
                                    <input type="text" name="title" class="form-control" 
                                     id="exampleFormControlInput1" 
                                     placeholder="Enter Title">
                                    <span class="mt-2 d-block"></span>
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Service Description</label>
                                    <textarea class="form-control" name="description" 
                                    id="exampleFormControlTextarea1" rows="3"></textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Service Icon</label>
                                    <input type="text" name="icoon" class="form-control" 
                                     id="exampleFormControlInput1" 
                                     placeholder="Enter Icon">
                                    <span class="mt-2 d-block"></span>
                                    @error('icoon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
              </div>
           </div>
      </div>
   </div>
@endsection