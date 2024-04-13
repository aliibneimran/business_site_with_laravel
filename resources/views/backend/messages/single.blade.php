@extends('backend.layouts.app')
@section('title','Single Message')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>For Single View</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered" style="width:100%;">
                        <tr>
                            <th>Name</th>
                            <th>{{$single->name}}</th>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <th>{{$single->email}}</th>
                        </tr>
                        <tr>
                            <th>Subject</th>
                            <th>{{$single->subject}}</th>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <th>{{$single->message}}</th>
                        </tr>
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