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
<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
<div class="card">
    <div class="card-header text-center">
        <strong>ABOUT</strong>
    </div>
     <div class="card-body card-block">
        
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="name-input" class=" form-control-label">Nama</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="name-input" value="{{ $data->nama_profile }}" placeholder="Nama" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="tlp-input" class=" form-control-label">No.Tlp</label>
                 </div>
                 <div class="col-12 col-md-9">
                    <input type="text" id="tlp-input" value="{{ $data->tlp_profile }}" placeholder="Enter Phone Number" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="tempat-input" class=" form-control-label">Tempat Lahir</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="tempat-input" value="{{ $data->tempat_lhr_profile }}" placeholder="Tempat Lahir" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="date-input" class=" form-control-label">Tanggal Lahir</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="date" id="date-input" value="{{ $data->tgl_lhr_profile }}" placeholder="Enter Tanggal Lahir" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="work-input" class=" form-control-label">Pekerjaan</label>
                </div>
                <div class="col-12 col-md-9">
                    @foreach($works as $work)
                    <input type="text" id="work-input" value="{{ $work->work }}" placeholder="Pekerjaan" class="form-control">
                    @endforeach
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="alamat-input" class=" form-control-label">Alamat</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea id="alamat" rows="5" placeholder="Masukkan Alamat" class="form-control">{{ $data->alamat }}</textarea>
                </div>
            </div>
        
    </div>
    <div class="card-footer">
        <a class="btn btn-success btn-sm" href="{{ url('/user/cv/experience') }}">Next</a>
    </div>
</div>
</form>
@endsection