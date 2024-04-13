@extends('backend.layouts.app')
@section('title','FAQ')
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
                <h4>All FAQ</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-hover text-center" id="tableExport" style="width:100%;">
                    <thead>
                      <tr>
                        <th>SI</th>
                        <th>Question</th>
                        <th>Answer</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($faq as $key=>$item)
                      <tr>
                        <td>{{++$key}}</td>
                        <td>{{$item->question}}</td>
                        <td>{{$item->answer}}</td>
                        <td style="width: 100px;">
                            <a href="{{route('faq.edit', $item->id)}}" class="btn btn-success btn-sm"><i class="fas fa-pen"></i></a>
                            
                            <form action="{{route('faq.destroy', $item->id)}}" method="POST" class="d-inline">
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