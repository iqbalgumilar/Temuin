@extends('admin.template.base')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Master</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Edit Skill</h3>
                    </div>
                    <hr>
                    <form action="{{ route('JenisProduk.update', $jenis_produk->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Jenis Produk</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="jenis_produk" placeholder="Jenis Produk" value="{{ $jenis_produk->jenis_produk }}" class="form-control">
                                <small class="form-text text-muted">This is a help text</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="select" class=" form-control-label">Status</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="status" id="select" class="form-control" required="">
                                    <option>--Pilih--</option>
                                    <option value="0" <?php if($jenis_produk->status=="0"){ echo 'selected'; } ?>>False</option>
                                    <option value="1" <?php if($jenis_produk->status=="1"){ echo 'selected'; } ?>>True</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-right">
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