@extends('backend.layouts.app')
@section('title','All Messages')
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Mssage</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @php $no = 1 @endphp
                    @foreach ($messages as $item)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->subject}}</td>
                        <td>{{ substr($item->message, 0,  50).'...' }}</td>
                        <td>
                            <a href="{{route('single_message',$item->id)}}" class="m-4"><i class="fas fa-eye"></i></a>
                            <a href=""><i class="fas fa-trash-alt"></i></a>
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