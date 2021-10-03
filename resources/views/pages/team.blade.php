@extends('layouts.master_home')
 @section('home_content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Team</h2>
          <ol>
            <li><a href="{{ route('homepage') }}">Home</a></li>
            <li>Team</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our<strong> Team</strong></h2>
          <p>Our team is really passionate and enthusiast and no time boundation is in our company for helping you. </p>
        </div>

        <div class="row">
          @foreach($teams as $team)
           <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up">
                   <div class="member-img">
                      <img src="{{ asset($team->image) }}" class="img-fluid" alt="">
                      <div class="social">
                         <a href=""><i class="icofont-twitter"></i></a>
                         <a href=""><i class="icofont-facebook"></i></a>
                         <a href=""><i class="icofont-instagram"></i></a>
                         <a href=""><i class="icofont-linkedin"></i></a>
                      </div>
                  </div>
                  <div class="member-info">
                     <h4>{{ $team->name }}</h4>
                     <span>{{ $team->post }}</span>
                  </div>
               </div>
            </div>
          @endforeach

        </div>

      </div>
    </section>
 @endsection