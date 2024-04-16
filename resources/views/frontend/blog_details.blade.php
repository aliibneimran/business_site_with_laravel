@extends('frontend.layouts.app')

@section('title', 'Blog')

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('')}}frontend/assets/img/blog-header.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>Blog Details</h2>
      <ol>
        <li><a href="{{url('/')}}">Home</a></li>
        <li>Blog Details</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Blog Details Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row g-5">

        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">

          <article class="blog-details">

            

            <h2 class="title">{{$blog->title}}</h2>

            <div class="meta-top mb-5">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">{{$blog->author}}</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="{{Carbon\Carbon::parse($blog->date)->format('M d, Y')}}">{{Carbon\Carbon::parse($blog->date)->format('M d, Y')}}</time></a></li>
              </ul>
            </div><!-- End meta top -->
            <div class="post-img">
              <img src="{{asset('')}}uploads/{{$blog->img}}" width="60%" height="70%" alt="Blog_img" class="img-fluid m-auto d-block">
            </div>
            <div class="content">
              <p>
                {{$blog->desc}}
              </p>

            </div><!-- End post content -->

          </article>

        </div>

        
      </div>

    </div>
  </section><!-- End Blog Details Section -->

</main>
@endsection