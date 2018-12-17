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

<form action="{{ route('awards.destroy',Session::get('id')) }}" method="post" id="form-awards" enctype="multipart/form-data" class="form-horizontal">
    {{ csrf_field() }}
  {{ method_field('DELETE') }}
<div class="card">
    <div class="card-header text-center">
        <strong>AWARDS</strong>
        <div class="float-right">
            <span class="" style="cursor: pointer" id="tambahAwards">
                <i class="fa fa-plus-circle text-success"></i>
            </span>
            <span class="" style="cursor: pointer" id="hapusAwards">
                <i class="fa fa-minus-circle text-danger"></i>
            </span>
        </div>
    </div>
    <div class="card-body card-block">
   
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="awards-input" class=" form-control-label">Awards</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="awards-input" value="{{ Session::get('award') }}" placeholder="Awards" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="descr-input" class=" form-control-label">Description</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea value="{{ Session::get('description_award') }}" id="descr" rows="3" placeholder="Content..." class="form-control"></textarea>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="icon-input" class=" form-control-label">Icon</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="icon-input" value="{{ Session::get('icon_award') }}" class="form-control-file">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="image-input" class=" form-control-label">Image</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="image-input" value="{{ Session::get('image_award') }}" class="form-control-file">
                </div>
            </div>
        
    </div>
    <div class="card-footer">
        <a class="btn btn-info btn-sm" href="{{ route('awards.edit',Session::get('id')) }}">Edit</a>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
</div>
</form>
@endsection