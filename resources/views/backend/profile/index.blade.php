@extends('backend.layouts.app')
@section('title','Profile')
@section('content')
<div class="main-content">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <img src="{{asset('')}}uploads/{{$admin->img}}" height="260px" class="img-fluid" style="border-radius:10px" width="260px" alt="image">
        </div>
        <div class="col-md-9">
          <!-- general form elements -->
          <div class="card card-primary">
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" name="name" class="form-control form-control-border" id="exampleInputEmail1" value="{{$admin->name}}" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" name="email" class="form-control form-control-border" id="exampleInputPassword1" value="{{$admin->email}}" readonly>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Status</label>
                  <input type="text" name="status" class="form-control form-control-border" id="exampleInputPassword1" value="Active" readonly>
                </div>  
                <a href="{{route('profile.edit', Auth::user()->id)}}" class="btn btn-success btn-sm mb-4"><i class="fas fa-pen"></i> Edit Profile</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  </div>
@endsection

