@extends('admin.admin_master')
    @section('admin')
                  <!-- Top Statistics -->
      <div class="row">
                    <div class="col-xl-4 col-sm-8">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">{{$users}}</h2>
                          <p>Number Of Users</p>
                          <div class="chartjs-wrapper">
                            <canvas id="barChart"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-sm-8">
                      <div class="card card-mini  mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">{{ $contact_form }}</h2>
                          <p>Number Of Visitors</p>
                          <div class="chartjs-wrapper">
                            <canvas id="dual-line"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-sm-8">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">{{$testis}}</h2>
                          <p>Number Of Clients</p>
                          <div class="chartjs-wrapper">
                            <canvas id="area-chart"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    
      </div>
     
   
      <div class="row">
							
							<div class="col-xl-12">
                  <!-- Top Products -->
                  <div class="card card-default" data-scroll-height="580">
                    <div class="card-header justify-content-between mb-4">
                      <h2>Top Clients</h2>
                      <div>
                          <!-- <button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button> -->
                          <div class="dropdown show d-inline-block widget-dropdown">
                             
                            </div>
                      </div>

                    </div>
                    <div class="card-body py-0">
                      @foreach($testist as $test)
                      <div class="media d-flex mb-5">
                        <div class="media-image align-self-center mr-3 rounded">
                          <a href="#"><img src="{{$test->image}}" alt="customer image"></a>
                        </div>
                        <div class="media-body align-self-center">
                          <a href="#"><h6 class="mb-3 text-dark font-weight-medium"></h6>{{$test->name}}</a>
                          <p class="float-md-right"><span class="text-dark mr-2"></span>{{$test->position}}</p>
                          <p class="d-none d-md-block">{{$test->des}}</p>
                          
                        </div>
                      </div>
                      @endforeach
                      
                      </div>
                  </div>
</div>
			</div>
    @endsection