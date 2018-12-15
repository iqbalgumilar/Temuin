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
<form action="{{ route('portfolio.destroy', Session::get('id')) }}" method="post" id="form-portfolio" enctype="multipart/form-data" class="form-horizontal">
    {{ method_field('DELETE') }}
  {{ csrf_field() }}
<div class="card">
    <div class="card-header text-center">
        <strong>PORTFOLIO</strong>
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
                    <label for="portfolio-input" class=" form-control-label">Portfolio</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="portfolio-input" value="{{ $data->portofolio }}" placeholder="Portfolio" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="img-portfolio-input" class=" form-control-label">Image</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="img-portfolio-input" value="{{ $data->image_portofolio }}" placeholder="Image" class="form-control">
                </div>
            </div>
             <div class="row form-group">
                <div class="col col-md-3">
                    <label for="link-portfolio-input" class=" form-control-label">Link</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="link-portfolio-input" value="{{ $data->link_portofolio }}" placeholder="Link" class="form-control">
                </div>
            </div>
        
    </div>
    <div class="card-footer">
        <a class="btn btn-info btn-sm" href="{{ route('portfolio.edit', Session::get('id')) }}">Edit</a>
        <a class="btn btn-success btn-sm" href="{{ url('/user/cv/awards') }}">Next</a>
    </div>
</div>
</form>
@endsection