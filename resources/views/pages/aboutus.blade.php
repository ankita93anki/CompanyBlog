@extends('layouts.master_home')
 @section('home_content')
 <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About Us</h2>
          <ol>
            <li><a href="{{ route('homepage') }}">Home</a></li>
            <li>About Us</li>
          </ol>
        </div>

      </div>
    </section>
 <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">
      <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        <div class="section-title">
          <h2><strong>About Us</strong></h2>
        </div> 
      </div>
        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <h2>{{ $home_abouts->title }}</h2>
            <h3>{{ $home_abouts->short_dis }}</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p>
                {{ $home_abouts->long_dis }}
            </p>
           
            
          </div>
        </div>

      </div>
    </section>
 @endsection