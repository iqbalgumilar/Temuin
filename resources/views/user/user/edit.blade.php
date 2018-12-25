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

<form action="{{ route('user.update', Session::get('id')) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
<div class="card">
    <div class="card-header">
        <strong>Saldo</strong> Rp. ____ <button class="btn btn-primary">Tambah</button>
    </div>
    <div class="card-body card-block">
        
        	{{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="username-input" class=" form-control-label">Username</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="username-input" name="username" placeholder="Username" value="{{ Session::get('username') }}" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">Email</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="email" id="email-input" name="email" placeholder="Enter Email"  value="{{ Session::get('email') }}" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="password-input" class=" form-control-label">Password</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="password" id="password-input" name="password" placeholder="Enter Your Password"  value="{{ Session::get('password') }}" class="form-control">
                </div>
            </div>
        
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
    </div>
</div>
</form>

@endsection
