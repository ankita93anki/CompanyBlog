@extends('admin.admin_master')
@section('admin')

   <div class="py-12">
      <div class="container">
            <div class="row">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <h4 style="text-align:center">Home Blogs</h4>
                <a href="{{ route('add.blog') }}"><button class="btn btn-info">Add Blogs</button></a>
                <br>
                <br>
              <div class="col-md-12">
                  <div class="card">
                      
                       <div class="card-header">All Blogs</div>
                         <table class="table">
                           <thead>
                              <tr>
                                 <th scope="col">SR NO#</th>
                                 <th scope="col">Blogs Title</th>
                                 <th scope="col">Blogs Image</th>
                                 <th scope="col">Blogs Author</th>
                                 <th scope="col">Action</th>
                              </tr>
                           </thead>
                            <tbody>
                              
                                @php($i = 1)
                                @foreach($blogs as $blog)
                                @if($blog->user_name == Auth::user()->name)
                                 <tr>
                                  <th>{{ $i++ }}</th>
                                   <td>{{ $blog->title }}</td>
                                  
                                   <td><img src="{{asset($blog->image)}}" alt="{{ $blog->title }}" 
                                     style="height:40px;width:70px"/> 
                                   </td>
                                   
                                   <td>
                                         {{ $blog->user_name }}
                                   </td>
                                   <td>
                                      <a href="{{ url('blog/edit/'.$blog->id) }}" class="btn btn-info">Edit</a>
                                      <a href="{{ url('blog/delete/'.$blog->id)}}" class="btn btn-danger" 
                                        onclick="return confirm('Are You Sure You Want To Delete')">Delete
                                       </a>
                                   </td>
                                 </tr>
                                 @endif
                              @endforeach
                              
                        </tbody>
                    </table>
               </div>
             </div>
          </div>
       </div> 
   </div>
@endsection
 

