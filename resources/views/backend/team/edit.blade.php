@extends('backend.layouts.app')
@section('title','Edit Member')
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
              <form action="{{route('team.update', $team->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-header">
                  <h4>Edit Member</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{old('name', $team->name)}}">
                  </div>
                  <div class="form-group">
                    <label>Designation</label>
                    <input type="text" class="form-control" name="designation" value="{{old('designation', $team->designation)}}">
                  </div>
                  <div class="form-group">
                    <label>Image</label><br>
                    <img src="{{asset('')}}uploads/{{$team->img}}" alt="Image" height="90px">
                    <input type="file" class="form-control" name="img" value="{{old('img', $team->img)}}">
                  </div>
                  <div class="form-group">
                    <label>Twitter</label>
                    <input type="text" class="form-control" name="twitter" value="{{old('twitter', $team->twitter)}}">
                  </div>
                  <div class="form-group">
                    <label>Facebook</label>
                    <input type="text" class="form-control" name="facebook" value="{{old('facebook', $team->facebook)}}">
                  </div>
                  <div class="form-group">
                    <label>Instagram</label>
                    <input type="text" class="form-control" name="instagram" value="{{old('instagram', $team->instagram)}}">
                  </div>
                  <div class="form-group">
                    <label>LinkedIn</label>
                    <input type="text" class="form-control" name="linkedin" value="{{old('linkedin', $team->linkedin)}}">
                  </div>
                  <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                      <option value="1" {{$team->status == 1 ? 'selected' : ""}} >Active</option>
                      <option value="0" {{$team->status == 0 ? 'selected' : ""}} >Inactive</option>
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