@extends('user.template.base')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">Portofolio</div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('portfolio.create') }}" class="btn btn-primary btn-sm">
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
                                <th>Portofolio</th>
                                <th>Image</th>
                                <th>Link</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach($portofolio as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                               <td>{{ $item->portofolio }}</td>
                               <td>
                                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#gambar-{{$item->id}}">Lihat Gambar</button>
                               <td>{{ $item->link_portofolio }}</td> 
                               <td>
                                   <form action="{{ route('portfolio.destroy',$item->id) }}" method="post">
                                       {{ csrf_field() }}
                                       {{ method_field('DELETE') }}
                                       <a href="{{ route('portfolio.edit',$item->id) }}" class="btn btn-info">Edit</a>
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
    
<!-- Modal -->
@foreach($portofolio as $item)
<div class="modal fade" id="gambar-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ $item->portofolio }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="{{Storage::url($item->image_portofolio)}}" class="img-thumbnail" alt="">
      </div>
    </div>
  </div>
</div>
@endforeach
<!-- end Modal -->

@endsection