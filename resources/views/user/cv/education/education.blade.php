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

<form action="{{ route('education.destroy',Session::get('id')) }}" method="post" id="form-education" enctype="multipart/form-data" class="form-horizontal">
     {{ csrf_field() }}
  {{ method_field('DELETE') }}
<div class="card">
    <div class="card-header text-center">
        <strong>EDUCATION</strong>
        <div class="float-right">
            <span class="" style="cursor: pointer" id="tambahEducation">
                <i class="fa fa-plus-circle text-success"></i>
            </span>
            <span class="" style="cursor: pointer" id="hapusEducation">
                <i class="fa fa-minus-circle text-danger"></i>
            </span>
        </div>
    </div>
    <div class="card-body card-block">
        
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="education-input" class=" form-control-label">Education</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="education-input" value="{{ Session::get('education') }}" placeholder="Education" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="from-education-input" class=" form-control-label">From</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="from-education-input" value="{{ Session::get('from_education') }}" placeholder="From Education" class="form-control">
                </div>
            </div>
        
    </div>
    <div class="card-footer">
        <a class="btn btn-info btn-sm" href="{{ route('education.edit',Session::get('id')) }}">Edit</a>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
</div>
</form>
@endsection