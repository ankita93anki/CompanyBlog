@extends('layouts.master_home')
@section('home_content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li><a href="{{ route('homepage') }}">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">
           @foreach($blogs as $blog)
            <article class="entry" data-aos="fade-up">

              <div class="entry-img">
                <img src="{{ asset($blog->image) }}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="{{ url('pages/blog/edit/'.$blog->id) }}">{{ $blog->title }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{ url('pages/blog/edit/'.$blog->id) }}"></a>{{ $blog->user_name }}</li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="{{ url('pages/blog/edit/'.$blog->id) }}">{{  \Carbon\Carbon::parse($blog->created_at)->format('j F, Y')}}</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="{{ url('pages/blog/edit/'.$blog->id) }}">Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                     {{ $blog->description }}
                </p>
                <!-- <div class="read-more">
                  <a href="{{ url('pages/blog/edit/'.$blog->id) }}">Read More</a>
                </div> -->
              </div>

            </article><!-- End blog entry -->
           @endforeach
          
              {!! $blogs->links()  !!}
          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar" data-aos="fade-left">

            

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                @foreach($blogs as $blog)
                 <div class="post-item clearfix">
                  <img src="{{ asset($blog->image) }}" alt="">
                  <h4><a href="blog-single.html">{{ $blog->title }}</a></h4>
                  <time datetime="2020-01-01">{{ $blog->created_at }}</time>
                 </div>
                @endforeach
              </div>

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

     
@endsection