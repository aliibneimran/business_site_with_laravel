@extends('frontend.layouts.app')

@section('title', 'FAQ\'s')

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('frontend/assets/img/faq-header.jpeg') }}');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>FAQ</h2>
      <ol>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>FAQ</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Faq Section ======= -->
  <section id="faq" class="faq section-bg">
    <div class="container">
      <div class="section-title text-center pb-3">
        <h2>Frequently Asked Questions</h2>
        <p>Here are some common questions that you might have.</p>
      </div>
      <div class="accordion accordion-flush" id="accordionFlushExample">
        @foreach ($faq as $item)
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{$item->id}}" aria-expanded="false" aria-controls="flush-collapseOne">
              {{$item->question}}
            </button>
          </h2>
          <div id="{{$item->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">{{$item->answer}}</div>
          </div>
        </div>
        @endforeach        
      </div>
    </div>
  </section><!-- End Frequently Asked Questions Section -->

</main><!-- End #main -->
@endsection
