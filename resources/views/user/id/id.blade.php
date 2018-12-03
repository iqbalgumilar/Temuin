@extends('user.template.base')
@section('content')

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
                <div class="col-12 col-md-4">
                    <input type="text" id="name-input" name="name-input" placeholder="Nama Depan" class="form-control">
                </div>
                <div class="col-12 col-md-4">
                    <input type="text" id="name-input" name="name-input" placeholder="Nama Belakang" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">Email</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="email" id="email-input" name="email-input" placeholder="Enter Email" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="tlp-input" class=" form-control-label">No.Tlp</label>
                 </div>
                 <div class="col-12 col-md-9">
                    <input type="text" id="tlp-input" name="tlp-input" placeholder="Enter Phone Number" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="work-input" class=" form-control-label">Pekerjaan</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="work-input" name="work-input" placeholder="Pekerjaan" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="alamat-input" class=" form-control-label">Alamat</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="alamat-input" id="alamat-input" rows="5" placeholder="Masukkan Alamat" class="form-control"></textarea>
                </div>
            </div>
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

@endsection