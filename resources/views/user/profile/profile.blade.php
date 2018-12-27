@extends('user.template.base')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">Profile</div>
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
                    <div class="row">
                    <div class="col-md-4">
                        @if($data->foto == 'default.png')
                            <img src="{{ url('images/default.png') }}" alt="Profile" class="img-thumbnail">
                        @else
                            <img src="{{ Storage::url($data->foto) }}" alt="Profile" class="img-thumbnail">
                        @endif
                    </div>
                    <div class="col-md-8">
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
                    </div>
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
