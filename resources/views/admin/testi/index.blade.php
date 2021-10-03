@extends('admin.admin_master')
@section('admin')
   <div class="py-12">
      <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                       
                        
                        
                        <div class="card-header">All Testimonial</div>
                          <table class="table">
                             <thead>
                                  <tr>
                                      
                                      <th scope="col">Name</th>
                                      <th scope="col">Profile Image</th>
                                      <th scope="col">Position</th>
                                     
                                      <th scope="col">Action</th>
                                  </tr>
                             </thead>
                             <tbody>
                                  @php($i = 1)
                                  @foreach($testis as $testi)
                                    <tr>
                                      
                                      <td width="10%">{{ $testi->name }}</td>
                                      <td width="10%"><img src="{{asset($testi->image)}}" alt="image" 
                                           style="height:40px;width:70px"/> 
                                      </td>
                                      <td width="10%">{{ $testi->position }}</td>
                                      <td width="15%">
                                         <a href="{{ url('testimonial/edit/'.$testi->id)}}" class="btn btn-info">Edit</a>
                                          <a href="{{ url('testimonial/delete/'.$testi->id)}}" class="btn btn-danger" 
                                            onclick="return confirm('Are You Sure You Want To Delete')">Delete
                                          </a>
                                      </td>
                                    </tr>
                                  @endforeach
                             </tbody>
                          </table>
                          {{ $testis->links() }}
                       
                   </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Add Team Member</div>
                            <div class="card-body">
                                <form action="{{ route('store.testi') }}" method="POST" enctype="multipart/form-data">
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
                                        <label for="exampleInputEmail1">Profile Image</label>
                                         <input type="file" name="image" class="form-control" 
                                         id="exampleInputEmail1" 
                                         aria-describedby="emailHelp">
                                         @error('image')
                                           <span class="text-danger">{{ $message }}</span>
                                         @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Position</label>
                                         <input type="text" name="position" class="form-control" 
                                         id="exampleInputEmail1" 
                                         aria-describedby="emailHelp">
                                         @error('position')
                                           <span class="text-danger">{{ $message }}</span>
                                         @enderror
                                    </div>
                                    <div class="form-group">
                                      
                                      <label for="exampleInputEmail1">Updated Description</label>
                                      <textarea type="text" name="des" class="form-control" id="exampleInputEmail1" 
                                       row="5"></textarea>
                                       
                                       @error('des')
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
 

