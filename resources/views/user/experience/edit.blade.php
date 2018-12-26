@extends('user.template.base')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif

<form action="{{ route('experience.update',$experience->id) }}" method="post" id="form-experience" enctype="multipart/form-data" class="form-horizontal">
<div class="card">
    <div class="card-header text-center">
        <strong>EXPERIENCES</strong>
    </div>
    <div class="card-body card-block" id="experience">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="work-input" class=" form-control-label">Pekerjaan</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="uid_work" id="" class="form-control">
                        <?php foreach($works as $work): ?>
                            <option value="{{ $work->id }}" <?php if($work->id==$experience->uid_work){ echo 'selected'; } ?>>{{ $work->work }}</option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="from-input" class=" form-control-label">From</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="from-input" name="from_experience" value="{{ $experience->from_experience }}" placeholder="From Experiences" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="date-first-input" class=" form-control-label">Date First</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="date" id="date-first-input" name="date_first_experience" value="{{ $experience->date_first_experience }}" placeholder="Enter Date First" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="date-last-input" class=" form-control-label">Date Last</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="date" id="date-last-input" name="date_last_experience" value="{{ $experience->date_last_experience }}" placeholder="Enter Date Last" class="form-control">
                </div>
            </div>
       
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <a href="{{ url('user/experience') }}" class="btn btn-success btn-sm">
            <i class="fa fa-arrow-left"></i> Back
        </a>
    </div>
</div>
</form>

@endsection