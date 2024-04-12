@extends('backend.layouts.app')
@section('title','Dashboard')
@section('content')
<div class="main-content">
  <h1 class="mb-4"><span class="col-orange">Mr. {{Auth::user()->name}}</span>, Welcome to the Dashboard.</h1>
  <section class="section">
    <div class="row ">
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15">Services</h5>
                    <a href="{{route('service.index')}}" class="mb-0"><span class="col-green">All Services</span></a>
                    <h2 class="mb-3 font-28">{{$service}}</h2>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="{{asset('backend/img/banner/service.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15">Category</h5>
                    <a href="{{route('category.index')}}" class="mb-0"><span class="col-green">All Categories</span></a>
                    <h2 class="mb-3 font-28">{{$category}}</h2>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="{{asset('backend/img/banner/category.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15">Team Member</h5>
                    <a href="{{route('team.index')}}" class="mb-0"><span class="col-green">All Members</span></a>
                    <h2 class="mb-3 font-28">{{$team}}</h2>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="{{asset('backend/img/banner/team.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15">Messages</h5>
                    <a href="{{route('messages')}}" class="mb-0"><span class="col-green">All Messages</span></a>
                    <h2 class="mb-3 font-28">{{$contact}}</h2>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="{{asset('backend/img/banner/message.png')}}" height="100vh" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>
@endsection