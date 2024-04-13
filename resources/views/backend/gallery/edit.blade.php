@extends('backend.layouts.app')
@section('title','Edit Gallery')
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
              <form action="{{route('gallery.update', $glry->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-header">
                  <h4>Edit Gallery</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" value="{{old('title', $glry->title)}}">
                  </div>

                  <div class="form-group">
                    <label>Category</label>
                    <select name="category_id" class="form-control">
                      <option disabled>Select Category</option>
                      @foreach ($cats as $item)
                          <option value="{{$item->id}}" @selected($item->id)>{{$item->title}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="img" value="{{old('img', $glry->img)}}">
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