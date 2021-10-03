@extends('admin.admin_master')
@section('admin')
   <div class="py-12">
      <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                       
                        
                        
                        <div class="card-header">All Feature</div>
                          <table class="table">
                             <thead>
                                  <tr>
                                      
                                      <th scope="col">Feature Name</th>
                                      <th scope="col">Feature Icon</th>
                                      <th scope="col">Feature Date</th>
                                      <th scope="col">Action</th>
                                  </tr>
                             </thead>
                             <tbody>
                                  @php($i = 1)
                                  @foreach($features as $feature)
                                    <tr>
                                      
                                      <td>{{ $feature->name }}</td>
                                      <td>{{ $feature->icon }}</td>
                                     <td>
                                          @if($feature->created_at == NULL)
                                             <span class="text-danger">No Data Set</span>
                                          @else
                                              {{ Carbon\Carbon::parse($feature->created_at)->diffForHumans() }}
                                          @endif
                                      </td>
                                      <td>
                                         <a href="{{ url('feature/edit/'.$feature->id)}}" class="btn btn-info">Edit</a>
                                          <a href="{{ url('feature/delete/'.$feature->id)}}" class="btn btn-danger" 
                                            onclick="return confirm('Are You Sure You Want To Delete')">Delete
                                          </a>
                                      </td>
                                    </tr>
                                  @endforeach
                             </tbody>
                          </table>
                          {{ $features->links() }}
                       
                   </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Add Feature</div>
                            <div class="card-body">
                                <form action="{{ route('store.feature') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Feature Name</label>
                                         <input type="text" name="name" class="form-control" 
                                         id="exampleInputEmail1" 
                                         aria-describedby="emailHelp">
                                         @error('name')
                                           <span class="text-danger">{{ $message }}</span>
                                         @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Feature Icon</label>
                                         <input type="text" name="icon" class="form-control" 
                                         id="exampleInputEmail1" 
                                         aria-describedby="emailHelp">
                                         @error('icon')
                                           <span class="text-danger">{{ $message }}</span>
                                         @enderror
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Add Feature</button>
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
 

