@extends('user.template.base')
@section('content')
<form action="{{ route('portfolio.store') }}" method="post" id="form-portfolio" enctype="multipart/form-data" class="form-horizontal">
<div class="card">
    <div class="card-header text-center">
        <strong>PORTFOLIO</strong>
    </div>
    <div class="card-body card-block" id="portfolio">
        {{ csrf_field() }}
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="portfolio-input" class=" form-control-label">Portofolio</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="portfolio-input" name="portofolio" placeholder="Portofolio" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="img-portfolio-input" class=" form-control-label">Image</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="img-portfolio-input" name="image_portofolio" placeholder="Image" class="form-control">
                </div>
            </div>
             <div class="row form-group">
                <div class="col col-md-3">
                    <label for="link-portfolio-input" class=" form-control-label">Link</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="link-portfolio-input" name="link_portofolio" placeholder="Link" class="form-control">
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