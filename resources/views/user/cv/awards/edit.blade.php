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

<form action="{{ route('awards.update',Session::get('id')) }}" method="post" id="form-awards" enctype="multipart/form-data" class="form-horizontal">
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
       {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="awards-input" class=" form-control-label">Awards</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="awards-input" name="award" value="{{ Session::get('award') }}" placeholder="Awards" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="descr-input" class=" form-control-label">Description</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="description_award" value="{{ Session::get('description_award') }}" id="descr" rows="3" placeholder="Content..." class="form-control"></textarea>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="icon-input" class=" form-control-label">Icon</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="icon-input" name="icon_award" value="{{ Session::get('icon_award') }}" class="form-control-file">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="image-input" class=" form-control-label">Image</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="image-input" name="image_award" value="{{ Session::get('image_award') }}" class="form-control-file">
                </div>
            </div>
        
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
</div>
</form>
@endforeach
@endsection