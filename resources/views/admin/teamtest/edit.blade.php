
@extends('admin.admin_master')
@section('admin')
    <div class="py-12">
        <div class="container" style="width:100%">
            <div class="row">
                <div class="card" style="width:100%">
                   
                    <div class="card-header">Edit User Profile</div>
                    <div class="card-body">
                        <form action="{{ url('team/update/'.$teams->id) }}" method="POST" enctype="multipart/form-data">
                           @csrf
                            <div class="form-group">
                                <input type="hidden" name="old_image" value="{{ $teams->image }}"/>
                                <label for="exampleInputEmail1">Updated Team Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" 
                                value="{{ $teams->name }}"
                                 aria-describedby="emailHelp">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Updated Team Image</label>
                                <input type="file" name="image" class="form-control" 
                                 id="exampleInputEmail1" value="{{ $teams->image }}"
                                 aria-describedby="emailHelp">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                
                                <label for="exampleInputEmail1">Updated Team Post</label>
                                <input type="text" name="pro_post" class="form-control" id="exampleInputEmail1" 
                                value="{{ $teams->post }}"
                                 aria-describedby="emailHelp">
                                @error('post')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                    <img src="{{asset($teams->image)}}" style="width:400px;height:200px"/>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Team Member</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection