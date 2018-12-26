@extends('user.template.base')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif

<form action="{{ route('education.update',$education->id) }}" method="post" id="form-education" enctype="multipart/form-data" class="form-horizontal">
<div class="card">
    <div class="card-header text-center">
        <strong>EDUCATION</strong>
    </div>
    <div class="card-body card-block" id="education">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="education-input" class=" form-control-label">Education</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="education-input" name="education" value="{{ $education->education }}" placeholder="Education" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="from-education-input" class=" form-control-label">From</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="from-education-input" name="from_education" value="{{ $education->from_education }}" placeholder="From Education" class="form-control">
                </div>
            </div>
        
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <a href="{{ url('user/education') }}" class="btn btn-success btn-sm">
            <i class="fa fa-arrow-left"></i> Back
        </a>
    </div>
</div>
</form>

@endsection