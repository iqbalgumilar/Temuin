@extends('user.template.base')
@section('content')
@foreach($data as $items)
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
 <form action="{{ route('user.destroy', $items->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
<div class="card">
    <div class="card-header">
        <strong>Saldo</strong> Rp. ____ <button class="btn btn-primary">Tambah</button>
    </div>
    <div class="card-body card-block">    
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="username-input" class=" form-control-label">Username</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="username-input" value="{{ $items->username }}" placeholder="Username" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">Email</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="email" id="email-input" value="{{ $items->email }}" placeholder="Enter Email" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="password-input" class=" form-control-label">Password</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="password" id="password-input" value="{{ $items->password }}" placeholder="Enter Your Password" class="form-control">
                </div>
            </div>
    </div>
    <div class="card-footer">
        <a class="btn btn-info btn-sm" href="{{ route('user.edit',$items->id) }}">Edit</a>
        <button type="submit" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
</div>
</form>
@endforeach
@endsection