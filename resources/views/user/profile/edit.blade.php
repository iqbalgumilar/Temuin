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
<form action="{{ route('profile.update',Session::get('id')) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
<div class="card">
    <div class="card-header">
        <strong>My</strong> Profile
    </div>
    <div class="card-body card-block">
        
        	{{ csrf_field() }}
        	{{ method_field('PUT') }}
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="name-input" class=" form-control-label">Nama</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="name-input" name="name" placeholder="Nama" value="{{ $data->nama_profile }}" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="tlp-input" class=" form-control-label">No.Tlp</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="tlp-input" name="tlp" placeholder="Enter Phone Number" value="{{ $data->tlp_profile }}" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="tempat-input" class=" form-control-label">Tempat Lahir</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="tempat-input" name="tempatlhr" placeholder="Tempat Lahir" value="{{ $data->tempat_lhr_profile }}" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="date-input" class=" form-control-label">Tanggal Lahir</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="date" id="date-input" name="datelhr" placeholder="Enter Tanggal Lahir" value="{{ $data->tgl_lhr_profile }}" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="work-input" class=" form-control-label">Pekerjaan</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="uid_work" id="" class="form-control">
                        <?php foreach($works as $work): ?>
                            <option value="{{ $work->id }}" <?php if($work->id==$data->uid_work){ echo 'selected'; } ?>>{{ $work->work }}</option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="alamat-input" class=" form-control-label">Alamat</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="alamat" id="alamat" rows="5" placeholder="Masukkan Alamat" class="form-control">{{ $data->alamat }}</textarea>
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