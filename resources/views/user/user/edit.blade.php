@extends('user.template.base')
@section('content')
@foreach($data as $datas)
<div class="card">
    <div class="card-header">
        <strong>Saldo</strong> Rp. ____ <button class="btn btn-primary">Tambah</button>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('user.update', datas->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
        	{{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="username-input" class=" form-control-label">Username</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="username-input" name="username" placeholder="Username" value="{{ $datas->username }}" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">Email</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="email" id="email-input" name="email" placeholder="Enter Email"  value="{{ $datas->email }}" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="password-input" class=" form-control-label">Password</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="password" id="password-input" name="password" placeholder="Enter Your Password"  value="{{ $datas->password }}" class="form-control">
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
@endforeach
@endsection