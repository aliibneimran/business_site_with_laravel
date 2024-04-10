@extends('backend.layouts.app')
@section('title','Service')
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
                <h4>All Member</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-hover text-center" id="tableExport" style="width:100%;">
                    <thead>
                      <tr>
                        <th>SI</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Twitter</th>
                        <th>Instagram</th>
                        <th>Facebook</th>
                        <th>Linkedin</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($team as $key=>$item)
                      <tr>
                        <td>{{++$key}}</td>
                        <td><img src="uploads/{{$item->img}}" alt="image" height="70"></td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->designation}}</td>
                        <td><a target="_blank" href="{{$item->twitter}}">{{$item->twitter}}</a></td>
                        <td><a target="_blank" href="{{$item->instagram}}">{{$item->instagram}}</a></td>
                        <td><a target="_blank" href="{{$item->facebook}}">{{$item->facebook}}</a></td>
                        <td><a target="_blank" href="{{$item->linkedin}}">{{$item->linkedin}}</a></td>
                        <td style="width: 100px;">
                            <a href="{{route('team.edit', $item->id)}}" class="btn btn-success btn-sm"><i class="fas fa-pen"></i></a>
                            <form action="{{route('team.destroy', $item->id)}}" class="d-inline" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="submit" onclick="return confirm('Are You sure to delete?')" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
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