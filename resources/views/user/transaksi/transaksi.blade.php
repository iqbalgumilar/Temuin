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
            <div class="col-md-6">Transaksi</div>
            <div class="col-md-6 text-right">
                <a href="{{ url('user/transaksi/all/'.Session::get('id')) }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-plus"></i> Lihat semua Transaksi
                </a>
            </div>
        </div>
    </div>
    <div class="card-body card-block">    
        <form action="{{ route('transaksi.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
        {{ csrf_field() }}
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="select" class=" form-control-label">Produk</label>
            </div>
            <div class="col-12 col-md-9">
                <select name="produk" id="select" class="form-control" required="">
                    <option>--Pilih--</option>
                    <?php foreach($vMasterProduk as $data): ?>
                        <option value="{{ $data->id }}">{{ $data->produk }}</option>
                    <?php endforeach; ?>
                </select>
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