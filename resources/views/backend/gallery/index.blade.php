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
                <h4>Export Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                    <thead>
                      <tr>
                        <th>SI</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Short Description</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($services as $key=>$item)
                      <tr>
                        <td>{{++$key}}</td>
                        <td><img src="uploads/{{$item->img}}" alt="image" height="70"></td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->description}}</td>
                        <td>
                            <a href="" class="btn btn-success btn-sm"><i class="fas fa-pen"></i></a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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