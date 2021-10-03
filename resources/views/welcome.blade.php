@extends('layouts.master_home')
 @section('home_content')
 @php
   $services = DB::table('home_services')->get();
@endphp
@include('layouts.body.slider')
 <!-- ======= About Us Section ======= -->
 <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><strong>About Us</strong></h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <h2>{{ $homeabouts->title }}</h2>
            <h3>{{ $homeabouts->short_dis }}</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p>{{ $homeabouts->long_dis }}</p>
            
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</strong></h2>
          <p>Our Services Are Best and support 24/7 hours.</p>
        </div>

        <div class="row">
        @foreach($services as $service)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                 </svg>
                <i class="{{$service->icoon}}"></i>
              </div>
              <h4><a href="">{{ $service->title }}</a></h4>
              <p>{{ $service->description }}</p>
            </div>
          </div>
        @endforeach
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Portfolio</h2>
        </div>

        <!--div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div-->

        <div class="row portfolio-container" data-aos="fade-up">
         
         @foreach($portfolios as $portfolio) 
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="{{ $portfolio->image }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                   <h4>{{ $portfolio->category }}</h4>
                  
                   <a href="{{ $portfolio->image }}" 
                       data-gall="portfolioGallery" class="venobox preview-link" title="App 1">
                      <i class="bx bx-plus"></i>
                  </a>
                  <a href="" class="details-link" title="More Details"></a>
               </div>
              </div>
           
          @endforeach
         
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Brands</h2>
        </div>
        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">
          @foreach($brands as $brand)
            <div class="col-lg-3 col-md-4 col-6">
              <div class="client-logo">
                <img src="{{ $brand->brand_image }}" class="img-fluid" alt="" style="width:150px;height:100px">
              </div>
            </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Our Clients Section -->
@endsection
