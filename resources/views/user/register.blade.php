@extends('user.template.base')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{erl('/register') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
<div class="card">
    <div class="card-header">
        <strong>Saldo</strong> Rp. ____ <button class="btn btn-primary">Tambah</button>
    </div>
    <div class="card-body card-block">
       
        	{{ csrf_field() }}
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="username-input" class=" form-control-label">Username</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="username-input" name="username" placeholder="Username" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">Email</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="email" id="email-input" name="email" placeholder="Enter Email" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="password-input" class=" form-control-label">Password</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="password" id="password-input" name="password" placeholder="Enter Your Password" class="form-control">
                </div>
            </div>
        
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
</form>
@endsection