@extends('admin.admin_master')
@section('admin')
    <div class="py-12">
        <div class="container">
             <div class="row">
                 <div class="col-md-8">
                    <div class="card">
                        @if(session('success'))
                         <div class="alert alert-success alert-dismissible fade show" role="alert">
                              <strong>{{ session('success')}}</strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                        @endif
                        <div class="card-header">All Multipic</div>
                            <div class="card-group">
                            @foreach($images as $multi)
                                <div class="col-md-4 mt-5">
                                    <div class="card">
                                        <img src="{{ asset($multi->image) }}" alt="image" 
                                        style="height:200px;width:250px"/>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                   </div>
                 </div>
                 <div class="col-md-4">
                       <div class="card">
                            <div class="card-header">Add Multiple Pic</div>
                            <div class="card-body">
                                <form action="{{ route('store.multiplepic') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category</label>
                                         <input type="text" name="category" class="form-control" 
                                         id="exampleInputEmail1" 
                                         aria-describedby="emailHelp"/>
                                         @error('category')
                                             <span class="text-danger">{{ $message }}</span>
                                         @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Multipic Images</label>
                                         <input type="file" name="image[]" class="form-control" 
                                         id="exampleInputEmail1" 
                                         aria-describedby="emailHelp" multiple=""/>
                                         @error('image')
                                             <span class="text-danger">{{ $message }}</span>
                                         @enderror
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Add Multipic</button>
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

