@extends('backend.layouts.app')
@section('title','Edit Profile')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              @if (session('msg'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{session('msg')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
              <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                {{-- @method('PUT') --}}
                <div class="card-header">
                  <h4>Edit Profile</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name">
                  </div>

                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email">
                  </div>

                  <div class="form-group">
                    <label>Profile Picture</label>
                    <input type="file" class="form-control" name="img">
                  </div>

                  {{-- <a href="#" class="btn btn-outline-primary">Change Password</a> --}}

                </div>
                <div class="card-footer text-left">
                  <button class="btn btn-primary ml-1" type="submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection