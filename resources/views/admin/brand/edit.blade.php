
@extends('admin.admin_master')
@section('admin')
    <div class="py-12">
        <div class="container" style="width:100%">
            <div class="row">
                <div class="card" style="width:100%">
                    @if(session('success'))
                       <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>{{ session('success')}}</strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                        </div>
                    @endif
                    <div class="card-header">Edit Brand</div>
                    <div class="card-body">
                        <form action="{{ url('brand/update/'.$brands->id) }}" method="POST" enctype="multipart/form-data">
                           @csrf
                            <div class="form-group">
                                <input type="hidden" name="old_image" value="{{ $brands->brand_image }}"/>
                                <label for="exampleInputEmail1">Updated Brand Name</label>
                                <input type="text" name="brand_name" class="form-control" id="exampleInputEmail1" value="{{ $brands->brand_name }}"
                                 aria-describedby="emailHelp">
                                @error('brand_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Updated Brand Image</label>
                                <input type="file" name="brand_image" class="form-control" 
                                 id="exampleInputEmail1" value="{{ $brands->brand_image }}"
                                 aria-describedby="emailHelp">
                                @error('brand_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                    <img src="{{asset($brands->brand_image)}}" style="width:400px;height:200px"/>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Brand</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection