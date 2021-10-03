@extends('admin.admin_master')
@section('admin')
   <div class="py-12">
      <div class="container">
            <div class="row">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <h4 style="text-align:center">Home About</h4>
                <a href="{{ route('add.home.about') }}"><button class="btn btn-info">Add Home About Section</button></a>
                <br>
                <br>
              <div class="col-md-12">
                  <div class="card">
                       @if(session('success'))
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                       @endif
                       <div class="card-header">All Home About Section</div>
                         <table class="table">
                           <thead>
                              <tr>
                                 
                                 <th scope="col">About Title</th>
                                 <th scope="col">About Short Description</th>
                                
                                 <th scope="col">Action</th>
                              </tr>
                           </thead>
                            <tbody>
                              @php($i = 1)
                               @foreach($homeabouts as $homeabout)
                                 <tr>
                                  
                                   <td width="15%">{{ $homeabout->title }}</td>
                                   <td width="35%">{{ $homeabout->short_dis }}</td>
                                   
                                   <td>
                                      <a href="{{ url('home/about/edit/'.$homeabout->id)}}" class="btn btn-info">Edit</a>
                                      <a href="{{ url('home/about/delete/'.$homeabout->id)}}" class="btn btn-danger" 
                                        onclick="return confirm('Are You Sure You Want To Delete')">Delete
                                       </a>
                                   </td>
                                 </tr>
                              @endforeach
                        </tbody>
                    </table>
               </div>
             </div>
          </div>
       </div> 
   </div>
@endsection
 

