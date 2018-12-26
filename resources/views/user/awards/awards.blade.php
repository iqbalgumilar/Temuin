@extends('user.template.base')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">User</div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('awards.create') }}" class="btn btn-primary btn-sm">
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
                    <div class="card-title">
                        <h3 class="text-center title-2">Awards</h3>
                    </div>
                    <hr>
                    <table id="table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Awards</th>
                                <th>Description</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach($awards as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                               <td>{{ $item->award }}</td>
                               <td>{{ $item->description_award }}</td> 
                               <td>
                                   <form action="{{ route('awards.destroy',$item->id) }}" method="post">
                                       {{ csrf_field() }}
                                       {{ method_field('DELETE') }}
                                       <a href="{{ route('awards.edit',$item->id) }}" class="btn btn-info">Edit</a>
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