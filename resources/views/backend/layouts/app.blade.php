<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('backend/css/app.min.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('backend/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('backend/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href='backend/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      @include('backend.layouts.header')
      @include('backend.layouts.sidebar')
      
      <!-- Main Content -->
      @yield('content')
      
      @include('backend.layouts.footer')
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{asset('backend/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{asset('backend/bundles/apexcharts/apexcharts.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('backend/js/page/index.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{asset('backend/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{asset('backend/js/custom.js')}}"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>