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
<form action="{{ route('skill.destroy', Session::get('id')) }}" method="post" id="form-skill" enctype="multipart/form-data" class="form-horizontal">
<div class="card">
    {{ method_field('DELETE') }}
  {{ csrf_field() }}
    <div class="card-header text-center">
        <strong>SKILLS</strong>
    </div>
    <div class="card-body card-block">
        
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="skills-input" class=" form-control-label">Skills</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="skills-input" value="{{ $skills->skill }}" placeholder="Skills" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="persentase-input" class=" form-control-label">Persentase</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="persentase-input" value="{{ $data->persentase_skill }}" placeholder="Persentase" class="form-control">
                </div>
            </div>
        
    </div>
    <div class="card-footer">
        <a class="btn btn-info btn-sm" href="{{ route('skill.edit', Session::get('id')) }}">Edit</a>
        <a class="btn btn-success btn-sm" href="{{ url('/user/portfolio') }}">Next</a>
        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
    </div>
</div>
</form>
@endsection