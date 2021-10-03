@extends('admin.admin_master')
@section('admin')
<div class="card card-default">
		<div class="card-header card-header-border-bottom">
			<h2>Change Password</h2>
		</div>
		<div class="card-body">
			<form method="POST" action="{{ route('password.update') }}" class="horizontal-form">
				@csrf
			   <div class="form-group row">
					<div class="col-12 col-md-3 text-right">
						<label for="">Current Password</label>
					</div>
					<div class="col-12 col-md-9">
						<input type="password" id="current_password" 
						name="current_password" class="form-control" 
						placeholder="Enter Current Password">
						@error('current_password')
						    <span class="text-danger">{{ $message }}</span>
						@enderror
					</div>
				</div>
				<div class="form-group row">
					<div class="col-12 col-md-3 text-right">
						<label for="">New Password</label>
					</div>
					<div class="col-12 col-md-9">
						<input type="password" id="password" 
						name="password" class="form-control" 
						placeholder="Enter New Password">
						@error('password')
						    <span class="text-danger">{{ $message }}</span>
						@enderror
					</div>
				</div>
				<div class="form-group row">
					<div class="col-12 col-md-3 text-right">
						<label for="">Confirm Password</label>
					</div>
					<div class="col-12 col-md-9">
						<input type="password" id="password_confirmation"
						 name="password_confirmation" class="form-control" 
						placeholder="Enter Confirm Password">
						@error('password_confirmation')
						    <span class="text-danger">{{ $message }}</span>
						@enderror
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
				
			</form>
		</div>
@endsection