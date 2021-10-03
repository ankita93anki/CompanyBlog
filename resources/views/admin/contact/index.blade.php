@extends('admin.admin_master')
@section('admin')
   <div class="py-12">
      <div class="container">
            <div class="row">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <h4 style="text-align:center">Contact</h4>
                <a href="{{ route('add.contact') }}"><button class="btn btn-info">Add Contact</button></a>
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
                                 <th scope="col">SR NO#</th>
                                 <th scope="col">Contact Email</th>
                                 <th scope="col">Contact Phone</th>
                                 <th scope="col">Contact Address</th>
                                 <th scope="col">Action</th>
                              </tr>
                           </thead>
                            <tbody>
                              @php($i = 1)
                               @foreach($contacts as $contact)
                                 <tr>
                                  <th scope="row" width="5%">{{ $i++ }}</th>
                                   <td width="15%">{{ $contact->email }}</td>
                                   <td width="20%">{{ $contact->phone }}</td>
                                   <td width="25%">{{ $contact->address }}</td>
                                   <td>
                                      <a href="{{ url('admin/contact/edit/'.$contact->id)}}" class="btn btn-info">Edit</a>
                                      <a href="{{ url('admin/contact/delete/'.$contact->id)}}" class="btn btn-danger" 
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
 

