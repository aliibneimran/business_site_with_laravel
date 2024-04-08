@extends('backend.layouts.app')
@section('title','Category')
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
              <div class="card-header">
                <h4>All Category</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-hover text-center" id="table-1_wrapper" style="width:100%;">
                    <thead>
                      <tr>
                        <th>Sl No</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($category as $key=>$item)
                      <tr>
                        <td>{{++$key}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->status == 1 ? "Active" : "Inactive"}}</td>
                        <td style="width: 100px">
                            <a href="{{route('category.edit', $item->id)}}" class="btn btn-success btn-sm"><i class="fas fa-pen"></i></a>
                            <form method="POST" class="d-inline" action="{{ route('category.destroy', $item->id) }}">
                              @csrf
                              @method('DELETE')
                              <button type="submit" onclick="return confirm('Are you sure to Delete?')" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
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