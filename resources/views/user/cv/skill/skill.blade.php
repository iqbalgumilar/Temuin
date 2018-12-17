@extends('user.template.base')
@section('content')
<div class="card">
    <div class="card-header text-center">
        <strong>SKILLS</strong>
        <div class="float-right">
            <span class="" style="cursor: pointer" id="tambahSkill">
                <i class="fa fa-plus-circle text-success"></i>
            </span>
            <span class="" style="cursor: pointer" id="hapusSkill">
                <i class="fa fa-minus-circle text-danger"></i>
            </span>
        </div>
    </div>
    <div class="card-body card-block">
        <form action="" method="post" id="form-skill" enctype="multipart/form-data" class="form-horizontal">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="skills-input" class=" form-control-label">Skills</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="skills-input" name="skills" placeholder="Skills" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="persentase-input" class=" form-control-label">Persentase</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="persentase-input" name="persentase" placeholder="Persentase" class="form-control">
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