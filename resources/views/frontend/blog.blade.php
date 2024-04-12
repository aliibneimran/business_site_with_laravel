@extends('frontend.layouts.app')

@section('title', 'Blog')

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('frontend/assets//img/blog-header.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>Blog</h2>
      <ol>
        <li><a href="{{url('/')}}">Home</a></li>
        <li>Blog</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row g-5">

        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">

          <div class="row gy-5 posts-list">

            @foreach ($blog as $item)
            <div class="col-lg-6">
              <article class="d-flex flex-column">

                <div class="post-img">
                  <img src="{{asset('')}}uploads/{{$item->img}}" alt="blog-header" class="img-fluid h-100 w-75" style="margin: 0 auto; display:block;" >
                </div>

                <h2 class="title">
                  <a href="{{route('blog.show', $item->id)}}">{{$item->title}}</a>
                </h2>

                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">{{$item->author}}</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="{{$item->date}}">{{ Carbon\Carbon::parse($item->date)->format('d M, Y') }}</time></a></li>
                    {{-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li> --}}
                  </ul>
                </div>

                <div class="content">
                  <p>
                    {{$item->desc}}
                  </p>
                </div>

                <div class="read-more mt-auto align-self-end">
                  <a href="{{route('blog.show', $item->id)}}">Read More <i class="bi bi-arrow-right"></i></a>
                </div>

              </article>
            </div>
            @endforeach

          </div><!-- End blog posts list -->

        </div>

      </div>

    </div>
  </section><!-- End Blog Section -->

</main><!-- End #main --><!-- End #main -->
@endsection