@extends('user.template.base')
@section('content')

<form action="{{ route('skill.update', $skill->id) }}" method="post" id="form-skill" enctype="multipart/form-data" class="form-horizontal">
<div class="card">
    <div class="card-header text-center">
        <strong>SKILLS</strong>
    </div>
    <div class="card-body card-block" id="skill">
        {{ csrf_field() }} 
        {{ method_field('PUT') }}      
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="skills-input" class=" form-control-label">Skills</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="uid_skill" id="" class="form-control">
                       <?php foreach($uid_skill as $skills): ?>
                            <option value="{{ $skills->id }}" <?php if($skills->id==$skill->uid_skill){ echo 'selected'; } ?>>{{ $skills->skill }}</option>
                        <?php endforeach; ?>
                    </select>
                        
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="persentase-input" class=" form-control-label">Persentase</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="persentase-input" name="persentase_skill" value="{{ $skill->persentase_skill }}" placeholder="Persentase" class="form-control">
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