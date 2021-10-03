@extends('admin.admin_master')
@section('admin')
<div class="card card-default">
		<div class="card-header card-header-border-bottom">
			<h2>USer Profile Update</h2>
		</div>
		<div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
			 <form method="POST" action="{{ route('update.user.profile') }}" class="horizontal-form" enctype="multipart/form-data">
				@csrf
			   <div class="form-group row">
					<div class="col-12 col-md-3 text-right">
						<label for="">User Name</label>
					</div>
					<div class="col-12 col-md-9">
						<input type="text"  
						name="name" value="{{ $user->name }}" class="form-control">
					</div>
			  </div>
              <div class="form-group row">
					<div class="col-12 col-md-3 text-right">
						<label for="">User Email</label>
					</div>
					<div class="col-12 col-md-9">
						<input type="text"  
						name="email" value="{{ $user->email }}" class="form-control">
					</div>
			  </div>
			  <div class="form-group row">
                   <div class="col-12 col-md-3 text-right">
                       <label for="">Updated Profile Image</label>
                  </div>
                  <div class="col-12 col-md-9">
                      <input type="file" name="profile_photo_path" class="form-control" aria-describedby="emailHelp">
                      <input type="hidden" name="old_image" value="{{ $user->profile_photo_path }}"/>
                       <img src="{{asset($user->profile_photo_path)}}" style="width:400px;height:200px"/>
                 </div>
              </div>
				<button type="submit" class="btn btn-primary">Update</button>
				
			</form>
		</div>
@endsection