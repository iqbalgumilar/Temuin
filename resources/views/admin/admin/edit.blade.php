@extends('admin.template.base')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Master</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Edit Admin</h3>
                    </div>
                    <hr>
                    <form action="{{ route('admin.update', $admin->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="name" placeholder="Name" value="{{ $admin->name }}" class="form-control">
                                <small class="form-text text-muted">This is a help text</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Username</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="username" placeholder="Username" value="{{ $admin->username }}" class="form-control">
                                <small class="form-text text-muted">This is a help text</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Password</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="password" id="text-input" name="password" placeholder="Password" class="form-control">
                                <small class="form-text text-muted">This is a help text</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="select" class=" form-control-label">Level</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="level" id="select" class="form-control" required="">
                                    <option>--Pilih--</option>
                                    <option value="0" <?php if($admin->level=="0"){ echo 'selected'; } ?>>Superadmin</option>
                                    <option value="1" <?php if($admin->level=="1"){ echo 'selected'; } ?>>Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ url('admin/admin') }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-arrow-left"></i> Back
                                </a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Update
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection