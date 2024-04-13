@extends('backend.layouts.app')
@section('title','Edit Service')
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
              <form action="{{route('service.update', $service->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-header">
                  <h4>Edit Service</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" value="{{old('title', $service->title)}}">
                  </div>

                  <div class="form-group">
                    <label>Description</label>
                    <textarea type="text" class="form-control" name="description">{{old('description', $service->description)}}</textarea>
                  </div>

                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="img" value="{{old('img', $service->img)}}">
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