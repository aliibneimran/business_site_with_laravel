@extends('frontend.layouts.app')

@section('title', 'Gallery')

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('frontend/assets/img/contact-header.jpg') }}');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>Gallery</h2>
      <ol>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>Gallery</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Faq Section ======= -->
  <section id="glry" class="glry section-bg">
    <div class="container">
      <div class="row">
        @foreach ($glry as $item)
        <div class="col-md-3 col-sm-12 py-4">
          <img src="{{asset('')}}uploads/{{$item->img}}" alt="glry1" height="220" width="100%">
          <a href="#" style="font-size: 1.3rem">{{$item->title}}</a> <br>
          <small>category: {{$item->category->title}}</small>
        </div>
        @endforeach        
      </div>
    </div>
  </section><!-- End Frequently Asked Questions Section -->

</main><!-- End #main -->
@endsection
