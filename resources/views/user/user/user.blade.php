@extends('user.template.base')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">Account</div>
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
                    <table id="table" class="table table-bordered" style="width:100%">
                        <thead>
                            
                        </thead>
                        <tbody>
                            <tr>
                                <th>Username</th>
                                <td>{{ Session::get('username') }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ Session::get('email') }}</td>
                            </tr>
                            <tr>
                                <th>Password</th>
                                <td>{{ Session::get('password') }}</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            
                        </tfoot>
                    </table>
                </div>
                <div class="card-footer">
                    <form action="{{ route('user.destroy',Session::get('id')) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <a href="{{ route('user.edit',Session::get('id')) }}" class="btn btn-info btn-sm">Edit</a>
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                     </form>         
                 </div>
            </div>
        </div>
    </div>


@endsection