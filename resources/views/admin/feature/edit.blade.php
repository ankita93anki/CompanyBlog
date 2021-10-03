
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
                    <div class="card-header">Edit Icon</div>
                    <div class="card-body">
                        <form action="{{ url('feature/update/'.$features->id) }}" method="POST" enctype="multipart/form-data">
                           @csrf
                            <div class="form-group">
                                
                                <label for="exampleInputEmail1">Updated Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" 
                                value="{{ $features->name }}"
                                 aria-describedby="emailHelp">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                
                                <label for="exampleInputEmail1">Updated Icon</label>
                                <input type="text" name="icon" class="form-control" id="exampleInputEmail1" 
                                value="{{ $features->icon }}"
                                 aria-describedby="emailHelp">
                                @error('icon')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                           
                            <button type="submit" class="btn btn-primary">Update Features</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection