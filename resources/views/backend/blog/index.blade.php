@extends('backend.layouts.app')
@section('title','Service')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>All Blog</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-hover text-center" id="tableExport" style="width:100%;">
                    <thead>
                      <tr>
                        <th>Sl No</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($blogs as $key=>$item)
                      <tr>
                        <td>{{++$key}}</td>
                        <td><img src="{{asset('')}}uploads/{{$item->img}}" alt="image" height="70"></td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->desc}}</td>
                        <td style="width: 100px;">
                            <a href="{{route('blog.edit', $item->id)}}" class="btn btn-success btn-sm"><i class="fas fa-pen"></i></a>
                            <form action="{{route('blog.destroy', $item->id)}}" method="post" class="d-inline">
                              @csrf
                              @method("DELETE")
                              <button onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                      </tr>
                    @endforeach
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection