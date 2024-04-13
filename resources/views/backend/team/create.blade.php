@extends('backend.layouts.app')
@section('title','Add Member')
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
              <form action="{{route('team.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                  <h4>Add Member</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name">
                  </div>
                  <div class="form-group">
                    <label>Designation</label>
                    <input type="text" class="form-control" name="designation">
                  </div>
                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="img">
                  </div>
                  <div class="form-group">
                    <label>Twitter</label>
                    <input type="text" class="form-control" name="twitter">
                  </div>
                  <div class="form-group">
                    <label>Facebook</label>
                    <input type="text" class="form-control" name="facebook">
                  </div>
                  <div class="form-group">
                    <label>Instagram</label>
                    <input type="text" class="form-control" name="instagram">
                  </div>
                  <div class="form-group">
                    <label>LinkedIn</label>
                    <input type="text" class="form-control" name="linkedin">
                  </div>
                  <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                      <option value="1">Active</option>
                      <option value="0">Inactive</option>
                    </select>
                  </div>
                  
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