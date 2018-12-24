@extends('user.template.base')
@section('content')
@if(\Session::has('alert'))
    <div class="alert alert-danger">
        <div>{{ Session::get('alert') }}</div>
    </div>
@endif
@if(\Session::has('alert-success'))
    <div class="alert alert-success">
        <div>{{ Session::get('alert-success') }}</div>
    </div>
@endif
<form action="{{ route('experience.destroy',Session::get('id')) }}" method="post" id="form-experience" enctype="multipart/form-data" class="form-horizontal">
     {{ method_field('DELETE') }}
  {{ csrf_field() }}
<div class="card">
    <div class="card-header text-center">
        <strong>EXPERIENCES</strong>
    </div>
    <div class="card-body card-block">
        
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="work-input" class=" form-control-label">Pekerjaan</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="work-input" value="{{ $works->work }}" placeholder="Pekerjaan" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="from-input" class=" form-control-label">From</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="from-input" value="{{ $data->from_experience }}" placeholder="From Experiences" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="date-first-input" class=" form-control-label">Date First</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="date" id="date-first-input" value="{{ $data->date_first_experience }}" placeholder="Enter Date First" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="date-last-input" class=" form-control-label">Date Last</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="date" id="date-last-input" value="{{ $data->date_last_experience }}" placeholder="Enter Date Last" class="form-control">
                </div>
            </div>
      
    </div>
    <div class="card-footer">
        <a class="btn btn-info btn-sm" href="{{ route('experience.edit',Session::get('id')) }}">Edit</a>
        <a class="btn btn-success btn-sm" href="{{ url('/user/cv/education') }}">Next</a>
        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
    </div>
</div>
  </form>
@endsection