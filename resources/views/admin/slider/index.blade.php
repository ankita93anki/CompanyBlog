@extends('admin.admin_master')
@section('admin')
   <div class="py-12">
      <div class="container">
            <div class="row">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <h4 style="text-align:center">Home Slider</h4>
                <a href="{{ route('add.slider') }}"><button class="btn btn-info">Add Slider</button></a>
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
                       <div class="card-header">All Slider</div>
                         <table class="table">
                           <thead>
                              <tr>
                                 <th scope="col">SR NO#</th>
                                 <th scope="col">Slider Title</th>
                                 <th scope="col">Slider Image</th>
                                 
                                 <th scope="col">Action</th>
                              </tr>
                           </thead>
                            <tbody>
                              @php($i = 1)
                               @foreach($sliders as $slider)
                                 <tr>
                                  <th>{{ $i++ }}</th>
                                   <td>{{ $slider->title }}</td>
                                  
                                   <td><img src="{{asset($slider->image)}}" alt="sliderimage" 
                                     style="height:40px;width:70px"/> 
                                   </td>
                                  
                                   <td>
                                      <a href="{{ url('slider/edit/'.$slider->id)}}" class="btn btn-info">Edit</a>
                                      <a href="{{ url('slider/delete/'.$slider->id)}}" class="btn btn-danger" 
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
 

