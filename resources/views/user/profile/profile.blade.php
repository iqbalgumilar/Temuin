@extends('user.template.base')
@section('content')
@foreach($data as $items)
<form action="{{ route('profile.destroy', $items->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
  {{ csrf_field() }}
  {{ method_field('DELETE') }}
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
                    <input type="text" id="name-input" value="{{ $items->nama_profile }}" placeholder="Nama" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="tempat-input" class=" form-control-label">Tempat Lahir</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="tempat-input" value="{{ $items->tempat_lhr_profile }}" placeholder="Tempat Lahir" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="date-input" class=" form-control-label">Tanggal Lahir</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="date" id="date-input" value="{{ $items->tgl_lhr_profile }}" placeholder="Enter Tanggal Lahir" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="tlp-input" class=" form-control-label">No.Tlp</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="tlp-input" value="{{ $items->tlp_profile }}" placeholder="Enter Phone Number" class="form-control">
                </div>
            </div>

            
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="work-input" class=" form-control-label">Pekerjaan</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="work-input" value="{{ $items->uid_work }}" placeholder="Pekerjaan" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="alamat-input" class=" form-control-label">Alamat</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea value="{{ $items->alamat }}" id="alamat" rows="5" placeholder="Masukkan Alamat" class="form-control"></textarea>
                </div>
            </div>

    </div>
    <div class="card-footer">
        <a class="btn btn-info btn-sm" href="{{ route('profile.edit',$items->id) }}">Edit</a>
        <button type="submit" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
</div>
</form>
@endforeach
@endsection