@extends('user.template.base')
@section('content')
<form action="{{ route('education.store') }}" method="post" id="form-education" enctype="multipart/form-data" class="form-horizontal">
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
    <div class="card-body card-block" id="education">
        {{ csrf_field() }}
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="education-input" class=" form-control-label">Education</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="education-input" name="education" placeholder="Education" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="from-education-input" class=" form-control-label">From</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="from-education-input" name="from_education" placeholder="From Education" class="form-control">
                </div>
            </div>
        
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
    </div>
</div>
</form>
@endsection