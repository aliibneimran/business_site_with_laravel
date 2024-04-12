@extends('backend.layouts.app')
@section('title','Edit Blog')
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
              <form action="{{route('blog.update', $blog->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-header">
                  <h4>Edit Blog</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" value="{{old('title', $blog->title)}}">
                  </div>

                  <div class="form-group">
                    <label>Description</label>
                    <textarea type="text" class="form-control" name="desc">{{old('desc', $blog->desc)}}</textarea>
                  </div>

                  <div class="form-group">
                    <label>Image</label><br>
                    <img src="{{asset('')}}uploads/{{$blog->img}}" alt="image" width="70">
                    <input type="file" class="form-control" name="img">
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