
@extends('admin.admin_master')
@section('admin')
    <div class="py-12">
        <div class="container" style="width:100%">
            <div class="row">
                <div class="card" style="width:100%">
                   
                    <div class="card-header">Edit Testimonial Profile</div>
                    <div class="card-body">
                        <form action="{{ url('testimonial/update/'.$testis->id) }}" method="POST" enctype="multipart/form-data">
                           @csrf
                            <div class="form-group">
                                <input type="hidden" name="old_image" value="{{ $testis->image }}"/>
                                <label for="exampleInputEmail1">Updated Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" 
                                value="{{ $testis->name }}"
                                 aria-describedby="emailHelp">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Updated Profile Image</label>
                                <input type="file" name="image" class="form-control" 
                                 id="exampleInputEmail1" value="{{ $testis->image }}"
                                 aria-describedby="emailHelp">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Updated Postion</label>
                                <input type="text" name="position" class="form-control" id="exampleInputEmail1" 
                                value="{{ $testis->position }}"
                                 aria-describedby="emailHelp">
                                @error('position')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                
                                <label for="exampleInputEmail1">Updated Description</label>
                                <textarea type="text" name="des" class="form-control" id="exampleInputEmail1" 
                                row="5">{{ $testis->des }}</textarea>
                                 
                                @error('des')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                    <img src="{{asset($testis->image)}}" style="width:400px;height:200px"/>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Member Information</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection