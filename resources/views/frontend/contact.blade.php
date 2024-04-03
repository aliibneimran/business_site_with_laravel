@extends('frontend.layouts.app')

@section('title', 'Contact')

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('frontend/assets/img/contact-header.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>Contact</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Contact</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container position-relative" data-aos="fade-up">

      <div class="row gy-4 d-flex justify-content-end">

        <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

          <div class="info-item d-flex">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h4>Location:</h4>
              <address>79/1, Kakrail, Dhaka-1000, Bangladesh</address>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h4>Email:</h4>
              <a href="mailto:hasnainsadid@gmail.com" style="color: black">hasnainsadid@gmail.com</a>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex">
            <i class="bi bi-phone flex-shrink-0"></i>
            <div>
              <h4>Call:</h4>
              <a href="tel:+8801798537135" style="color: black">+880 1798 537 135</a>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
          {{-- For Sent Messages --}}
          <form action="{{route('message_store')}}" method="post" class="php-email-form">
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control"  placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email"  placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              @if (session('success'))
                <div class="alert alert-success">
                {{ session('success') }}
                </div>
              @endif
            </div>
            <div class="text-center">
              <button type="submit" style="border-radius: 5px">Send Message</button>
            </div>
          </form>

        </div><!-- End Contact Form -->

      </div>

    </div>
  </section><!-- End Contact Section -->

  {{-- google map --}}
  <section id="map" class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3857.2883257347653!2d90.40063866199286!3d23.73540130036066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8f262ce64dd%3A0x3bcaa32cd9aa5dc5!2s79%2C%201%20Kakrail%20Rd%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1712133724872!5m2!1sen!2sbd" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>

</main><!-- End #main -->
@endsection