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
<div class="card">
    <div class="card-header text-center">
        <strong>ID Card</strong>
    </div>

     <div class="card-body card-block">
        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="name-input" class=" form-control-label">Nama</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="name-input" name="name-input" value="{{ $data->nama_profile }}" placeholder="Nama" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="tlp-input" class=" form-control-label">No.Tlp</label>
                 </div>
                 <div class="col-12 col-md-9">
                    <input type="text" id="tlp-input" name="tlp-input" value="{{ $data->tlp_profile }}" placeholder="Enter Phone Number" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="work-input" class=" form-control-label">Pekerjaan</label>
                </div>
                <div class="col-12 col-md-9">
         
                    <input type="text" id="work-input" value="{{ $works->work }}" placeholder="Pekerjaan" class="form-control">
            
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="alamat-input" class=" form-control-label">Alamat</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="alamat" id="alamat-input" rows="5" placeholder="Masukkan Alamat" class="form-control">{{ $data->alamat }}</textarea>
                </div>
            </div>
        </form>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-success btn-sm float-right">
            <i class="fa fa-dot-circle-o"></i> Generate
        </button>
        <a class="btn btn-info btn-sm" href="{{ route('profile.edit',Session::get('id')) }}">Edit</a>
    </div>
</div>

@endsection