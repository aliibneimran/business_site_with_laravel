@extends('backend.layouts.app')
@section('title','Add FAQ')
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
              <form action="{{route('faq.store')}}" method="post">
                @csrf
                <div class="card-header">
                  <h4>Add FAQ</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Question</label>
                    <input type="text" class="form-control" name="question">
                  </div>

                  <div class="form-group">
                    <label>Answer</label>
                    <textarea type="text" class="form-control" name="answer"></textarea>
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