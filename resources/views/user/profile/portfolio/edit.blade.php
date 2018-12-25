@extends('user.template.base')
@section('content')

<form action="{{ route('portfolio.update', Session::get('id')) }}" method="post" id="form-portfolio" enctype="multipart/form-data" class="form-horizontal">
<div class="card">
    <div class="card-header text-center">
        <strong>PORTFOLIO</strong>
        <div class="float-right">
            <span class="" style="cursor: pointer" id="tambahPortfolio">
                <i class="fa fa-plus-circle text-success"></i>
            </span>
            <span class="" style="cursor: pointer" id="hapusPortfolio">
                <i class="fa fa-minus-circle text-danger"></i>
            </span>
        </div>
    </div>
    <div class="card-body card-block" id="portfolio">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="portfolio-input" class=" form-control-label">Portofolio</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="portfolio-input" name="portofolio" value="{{ $data->portofolio }}" placeholder="Portofolio" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="img-portfolio-input" class=" form-control-label">Image</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="img-portfolio-input" name="image_portofolio" value="{{ $data->image_portofolio }}" placeholder="Image" class="form-control">
                </div>
            </div>
             <div class="row form-group">
                <div class="col col-md-3">
                    <label for="link-portfolio-input" class=" form-control-label">Link</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="link-portfolio-input" name="link_portofolio" value="{{ $data->link_portofolio }}" placeholder="Link" class="form-control">
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