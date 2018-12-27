@extends('user.template.base')
@section('content')
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">Education</div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('education.create') }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-plus"></i> Tambah
                            </a>
                        </div>
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
                    <table id="table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Education</th>
                                <th>From</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach($education as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->education }}</td>
                                <td>{{ $item->from_education }}</td>
                                <td>
                                   <form action="{{ route('education.destroy',$item->id) }}" method="post">
                                       {{ csrf_field() }}
                                       {{ method_field('DELETE') }}
                                       <a href="{{ route('education.edit',$item->id) }}" class="btn btn-info">Edit</a>
                                       <button type="submit" class="btn btn-danger">Hapus</button>
                                   </form>
                               </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection