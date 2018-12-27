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

<form action="{{ route('profile.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
<div class="card">
    <div class="card-header">
        <strong>My</strong> Profile
    </div>
    <div class="card-body card-block">

            {{ csrf_field() }}
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="name-input" class=" form-control-label">Nama</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="name-input" name="name" placeholder="Nama" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="tempat-input" class=" form-control-label">Tempat Lahir</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="tempat-input" name="tempatlhr" placeholder="Tempat Lahir" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="date-input" class=" form-control-label">Tanggal Lahir</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="date" id="date-input" name="datelhr" placeholder="Enter Tanggal Lahir" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="tlp-input" class=" form-control-label">No.Tlp</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="tlp-input" name="tlp" placeholder="Enter Phone Number" class="form-control">
                </div>
            </div>

          <div class="row form-group">
                <div class="col col-md-3">
                    <label for="work-input" class=" form-control-label">Pekerjaan</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="uid_work" id="" class="form-control">
                        @foreach($works as $work)
                        <option value="{{ $work->id }}">{{ $work->work }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="alamat-input" class=" form-control-label">Alamat</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="alamat" id="alamat" rows="5" placeholder="Masukkan Alamat" class="form-control"></textarea>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="foto" class=" form-control-label">Foto</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" id="foto" name="foto" placeholder="Enter Photo" class="form-control">
                </div>
            </div>

    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <a href="{{ url('user/profile') }}" class="btn btn-success btn-sm">
            <i class="fa fa-arrow-left"></i> Back
        </a>
    </div>
</div>
</form>
@endsection