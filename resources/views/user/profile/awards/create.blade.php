@extends('user.template.base')
@section('content')
<form action="{{ route('awards.store') }}" method="post" id="form-awards" enctype="multipart/form-data" class="form-horizontal">

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
    <div class="card-body card-block" id="awards">
    {{ csrf_field() }}
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="awards-input" class=" form-control-label">Awards</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="awards-input" name="award" placeholder="Awards" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="descr-input" class=" form-control-label">Description</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="description_award" id="descr" rows="3" placeholder="Content..." class="form-control"></textarea>
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