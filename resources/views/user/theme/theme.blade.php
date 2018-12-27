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
            <div class="col-md-6">Theme</div>
        </div>
    </div>
    <div class="card-body card-block">    
        <form action="{{ route('theme.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
        {{ csrf_field() }}
        <input type="hidden" name="id_theme" value="<?php if($theme != NULL){ echo $theme->id; } ?>">
        <input type="hidden" name="id_profile" value="{{ $profile->id }}">
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="skills-input" class=" form-control-label">Personal Blog</label>
            </div>
            <div class="col-12 col-md-9">
                <select name="uid_pb" id="" class="form-control">
                    <?php foreach($transaksi as $data): ?>
                        <?php if($data->id_jenis_produk == "2"): ?>
                            <option value="{{ $data->uid_produk }}" <?php if($theme != NULL){ if($data->uid_produk == $theme->uid_pb){ echo "selected"; } } ?> >{{ $data->produk }}</option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="skills-input" class=" form-control-label">CV</label>
            </div>
            <div class="col-12 col-md-9">
                <select name="uid_cv" id="" class="form-control">
                    <?php foreach($transaksi as $data): ?>
                        <?php if($data->id_jenis_produk == "3"): ?>
                            <option value="{{ $data->uid_produk }}" <?php if($theme != NULL){ if($data->uid_produk == $theme->uid_cv){ echo "selected"; } } ?> >{{ $data->produk }}</option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="skills-input" class=" form-control-label">Card Name</label>
            </div>
            <div class="col-12 col-md-9">
                <select name="uid_kn" id="" class="form-control">
                    <?php foreach($transaksi as $data): ?>
                        <?php if($data->id_jenis_produk == "4"): ?>
                            <option value="{{ $data->uid_produk }}" <?php if($theme != NULL){ if($data->uid_produk == $theme->uid_kn){ echo "selected"; } } ?> >{{ $data->produk }}</option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div>
    <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Terapkan
        </button>
    </div>
    </form>
</div>

@endsection