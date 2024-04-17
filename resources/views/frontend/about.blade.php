@extends('frontend.layouts.app')

@section('title', 'About')

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('frontend/assets/img/about-header.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>About</h2>
      <ol>
        <li><a href="{{url('/')}}">Home</a></li>
        <li>About</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4" data-aos="fade-up">
        <div class="col-lg-4">
          <img src="frontend/assets/img/about.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8">
          <div class="content ps-lg-5">
            <h3>Our Company</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea corporis animi nesciunt quasi aliquam, culpa impedit iste atque reprehenderit sit, possimus quod, nisi magni nihil? Ab odio vero dolorum ipsum Nulla, autem cupiditate quia laudantium deleniti impedit recusandae rerum.
            </p>
            <ul>
              <li><i class="bi bi-check-circle-fill"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
              <li><i class="bi bi-check-circle-fill"></i> In nihil dicta deserunt. Doloremque id velit unde, veritatis perspiciatis temporibus animi neque ducimus.</li>
              <li><i class="bi bi-check-circle-fill"></i> magni aliquam consequatur assumenda deleniti. Aut, possimus est.</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= History ======= -->
  <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>History</h2>

      </div>

      <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

        <div class="col-xl-5 img-bg" style="background-image: url('frontend/assets/img/why-us-bg.jpg')"></div>
        <div class="col-xl-7 slides  position-relative p-3">
          <p style="text-align: justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe et ut rem at laboriosam quos sed. Cum necessitatibus sapiente cumque ipsa ipsam reiciendis pariatur repellat beatae laborum commodi nobis, repellendus labore enim accusantium. Vel, autem. Libero autem porro, corrupti ullam fugit placeat dolorem neque molestiae tempora veritatis numquam molestias doloribus rem quidem a atque, cumque illo maiores adipisci culpa optio vel aliquam et. Quos, amet itaque repellat molestiae quae tempora corporis deserunt impedit distinctio tenetur placeat dolores neque nobis molestias alias soluta, dolorum voluptatum corrupti magni? Saepe consectetur aspernatur soluta, minima est tenetur nihil aliquam repudiandae officia quaerat delectus totam explicabo dignissimos, tempora inventore odio perferendis, iure velit. Commodi repudiandae a reiciendis eligendi dolores quos, reprehenderit, ratione voluptatem perferendis tenetur voluptate! Voluptas magni consequuntur, eligendi veniam nemo animi fuga. <br> <br>Itaque, ad incidunt soluta sunt ipsa fugiat blanditiis tenetur at, id odio rem necessitatibus sit, dolores molestias earum a deleniti alias nihil ex. Repellat dolore ipsam vel tempore ex voluptate ad aspernatur iste quos reprehenderit? Quis voluptatum magnam quo dignissimos facilis assumenda modi excepturi? Commodi aut, molestias incidunt, quidem pariatur, nihil vero labore dignissimos magnam dicta nulla facere vel consequatur debitis deserunt! Repudiandae voluptatem necessitatibus accusantium quaerat beatae non, placeat magni architecto et culpa amet cum soluta dolorem fugit perspiciatis. Iure, dolor. Enim ipsum deserunt soluta vel, laboriosam pariatur unde fuga possimus est expedita cum, iste quod quas illum odio, delectus cupiditate vero harum itaque perspiciatis optio corporis rerum? Deleniti corrupti doloremque iste quos tempore dicta rem? Fugit perspiciatis repudiandae, a tenetur minima dolores sunt perferendis similique quidem deleniti officiis .</p>
        </div>

      </div>

    </div>
  </section><!-- End Why Choose Us Section -->
  <br>

  <!-- ======= Mission Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-down">

      <div class="row gy-4" data-aos="fade-down">
        <div class="col-lg-8">
          <div class="content ps-lg-5">
            <h3>Our Goals</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea corporis animi nesciunt quasi aliquam,Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, dolorum.
            </p>
            <ul>
              <li><i class="bi bi-check-circle-fill"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
              <li><i class="bi bi-check-circle-fill"></i> In nihil dicta deserunt. Doloremque id velit unde, veritatis perspiciatis temporibus animi neque ducimus.</li>
              <li><i class="bi bi-check-circle-fill"></i> magni aliquam consequatur assumenda deleniti. Aut, possimus est.</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <img src="frontend/assets/img/hero-bg.jpg" class="img-fluid" alt="">
        </div>
        
      </div>

    </div>
  </section><!-- End mission Section -->

  <!-- ======= Call To Action Section ======= -->
  <section id="call-to-action" class="call-to-action">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h3>Ut fugiat aliquam aut non</h3>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>
      </div>

    </div>
  </section><!-- End Call To Action Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Team</h2>

      </div>

      <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          @foreach ($team as $item)
          <div class="swiper-slide">
            <div class="testimonial-item m-4 pb-5">
              <div class="team-member">
                <div class="member-img">
                  <img src="{{asset('')}}uploads/{{$item->img}}" class="img-fluid" alt="">
                  <div class="social">
                    <a href="{{$item->twitter}}"><i class="bi bi-twitter"></i></a>
                    <a href="{{$item->facebook}}" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="{{$item->instagram}}" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="{{$item->linkedin}}" target="_blank"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>{{$item->name}}</h4>
                  <span>{{$item->designation}}</span>
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section>
  <!-- End Team Section -->

</main>
@endsection