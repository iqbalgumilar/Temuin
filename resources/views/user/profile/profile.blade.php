@extends('user.template.base')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">User</div>
                    </div>
                </div>
                <div class="card-body">
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
                    <div class="card-title">
                        <h3 class="text-center title-2">Profile</h3>
                    </div>
                    <hr>
                    <table id="table" class="table table-bordered" style="width:100%">
                        <thead>
                            
                        </thead>
                        <tbody>
                            <tr>
                                <th>Nama</th>
                                <td>{{ $data->nama_profile }}</td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <td>{{ $data->tempat_lhr_profile }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>{{ $data->tgl_lhr_profile }}</td>
                            </tr>
                            <tr>
                                <th>No. Tlp</th>
                                <td>{{ $data->tlp_profile }}</td>
                            </tr>
                            <tr>
                                <th>Pekerjaan</th>
                                <td>{{ $works->work }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $data->alamat }}</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            
                        </tfoot>
                    </table>
                </div>
                <div class="card-footer">
                    <form action="{{ route('profile.destroy',Session::get('id')) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <a href="{{ route('profile.edit',Session::get('id')) }}" class="btn btn-info btn-sm">Edit</a>
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                     </form>         
                 </div>
            </div>
        </div>
    </div>

@endsection