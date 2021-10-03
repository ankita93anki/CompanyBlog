@extends('admin.admin_master')
@section('admin')
   <div class="py-12">
      <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                       
                        
                        
                        <div class="card-header">All Team Member</div>
                          <table class="table">
                             <thead>
                                  <tr>
                                      
                                      <th scope="col">Team Member Name</th>
                                      <th scope="col">Team Member Image</th>
                                      <th scope="col">Team Member Position</th>
                                      <th scope="col">Action</th>
                                  </tr>
                             </thead>
                             <tbody>
                                  @php($i = 1)
                                  @foreach($teams as $team)
                                    <tr>
                                      
                                      <td>{{ $team->name }}</td>
                                      <td><img src="{{asset($team->image)}}" alt="image" 
                                           style="height:40px;width:70px"/> 
                                      </td>
                                      <td>{{ $team->post }}</td>
                                     
                                      <td width="25%">
                                         <a href="{{ url('team/edit/'.$team->id)}}" class="btn btn-info">Edit</a>
                                          <a href="{{ url('team/delete/'.$team->id)}}" class="btn btn-danger" 
                                            onclick="return confirm('Are You Sure You Want To Delete')">Delete
                                          </a>
                                      </td>
                                    </tr>
                                  @endforeach
                             </tbody>
                          </table>
                          {{ $teams->links() }}
                       
                   </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Add Team Member</div>
                            <div class="card-body">
                                <form action="{{ route('store.team') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Name</label>
                                         <input type="text" name="name" class="form-control" 
                                         id="exampleInputEmail1" 
                                         aria-describedby="emailHelp">
                                         @error('name')
                                           <span class="text-danger">{{ $message }}</span>
                                         @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Team Profile Image</label>
                                         <input type="file" name="image" class="form-control" 
                                         id="exampleInputEmail1" 
                                         aria-describedby="emailHelp">
                                         @error('image')
                                           <span class="text-danger">{{ $message }}</span>
                                         @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Post</label>
                                         <input type="text" name="pro_post" class="form-control" 
                                         id="exampleInputEmail1" 
                                         aria-describedby="emailHelp">
                                         @error('pro_post')
                                           <span class="text-danger">{{ $message }}</span>
                                         @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add Team Member</button>
                               </form>
                             </div>
                            </div>
                      </div>
                   </div>
              </div>
          </div>
       </div> 
   </div>
@endsection
 

