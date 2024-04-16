<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="{{url('/')}}" class="logo d-flex align-items-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="{{asset('')}}frontend/assets/img/logo.png" alt=""> -->
      <h1 class="d-flex align-items-center">Business Website</h1>
    </a>

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="{{url('/')}}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{url('/about')}}" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
        <li><a href="{{url('/service')}}" class="{{ request()->is('service') ? 'active' : '' }}">Services</a></li>
        <li><a href="{{url('/gallery')}}" class="{{ request()->is('gallery') ? 'active' : '' }}">Album Gallery</a></li>
        <li><a href="{{url('/blog')}}" class="{{ request()->is('blog') ? 'active' : '' }}">Blog</a></li>
        <li><a href="{{url('/faq')}}" class="{{ request()->is('faq') ? 'active' : '' }}">FAQ</a></li>
        <li><a href="{{url('/contact')}}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
      </ul>
    </nav><!-- .navbar -->

  </div>
</header>
<!-- End Header -->