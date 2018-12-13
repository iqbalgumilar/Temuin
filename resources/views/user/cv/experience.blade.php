@extends('user.template.base')
@section('content')
<div class="card">
    <div class="card-header text-center">
        <strong>EXPERIENCES</strong>
        <div class="float-right">
            <span class="" style="cursor: pointer" id="tambahExperience">
                <i class="fa fa-plus-circle text-success"></i>
            </span>
            <span class="" style="cursor: pointer" id="hapusExperience">
                <i class="fa fa-minus-circle text-danger"></i>
            </span>
        </div>
    </div>
    <div class="card-body card-block">
        <form action="" method="post" id="form-experience" enctype="multipart/form-data" class="form-horizontal">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="work-input" class=" form-control-label">Pekerjaan</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="work-input" name="work" placeholder="work" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="from-input" class=" form-control-label">From</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="from-input" name="fromexperiences" placeholder="From Experiences" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="date-first-input" class=" form-control-label">Date First</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="date" id="date-first-input" name="datefrist" placeholder="Enter Date First" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="date-last-input" class=" form-control-label">Date Last</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="date" id="date-last-input" name="datelast" placeholder="Enter Date Last" class="form-control">
                </div>
            </div>
        </form>
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
@endsection