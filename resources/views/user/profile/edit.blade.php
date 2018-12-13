@extends('user.template.base')
@section('content')
@foreach($data as $datas)
<div class="card">
    <div class="card-header">
        <strong>My</strong> Profile
    </div>
    <div class="card-body card-block">
        <form action="{{ route('profile.update',$datas->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
        	{{ csrf_field() }}
        	{{ method_field('PUT') }}
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="name-input" class=" form-control-label">Nama</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="name-input" name="name" placeholder="Nama" value="{{ $datas->nama_profile }}" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="tlp-input" class=" form-control-label">No.Tlp</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="tlp-input" name="tlp" placeholder="Enter Phone Number" value="{{ $datas->tlp_profile }}" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="tempat-input" class=" form-control-label">Tempat Lahir</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="tempat-input" name="tempatlhr" placeholder="Tempat Lahir" value="{{ $datas->tempat_lhr_profile }}" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="date-input" class=" form-control-label">Tanggal Lahir</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="date" id="date-input" name="datelhr" placeholder="Enter Tanggal Lahir" value="{{ $datas->tgl_lhr_profile }}" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="work-input" class=" form-control-label">Pekerjaan</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="work-input" name="work" value="{{ $datas->uid_work }}" placeholder="Pekerjaan" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="alamat-input" class=" form-control-label">Alamat</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="alamat" id="alamat" rows="5" placeholder="Masukkan Alamat" value="{{ $datas->alamat }}" class="form-control"></textarea>
                </div>
            </div>
            <!-- <div class="row form-group"> 
                <div class="col col-md-3">
                    <label for="photo-input" class=" form-control-label">Photo</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" id="photo-input" name="photo-input" class="form-control-file">
                </div>
            </div> -->
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
@endforeach
@endsection