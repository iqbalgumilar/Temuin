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
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">Upload Bukti Transaksi</div>
            <div class="col-md-6 text-right">
                <a href="{{ url('user/transaksi/all/'.Session::get('id')) }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-plus"></i> Lihat semua Transaksi
                </a>
            </div>
        </div>
    </div>
    <div class="card-body card-block">    
        <form action="{{ url('user/transaksi/actUpload/'.$transaksi->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
        {{ csrf_field() }}
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="username-input" class=" form-control-label">Foto</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="file" id="username-input" name="file" placeholder="File" class="form-control">
                <span style="color:red">*gunakan format jpg atau png.</span>
            </div>
        </div>
    </div>
    <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
    </div>
    </form>
</div>

@endsection