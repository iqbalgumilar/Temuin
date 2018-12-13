@extends('user.template.base')
@section('content')
<table>
<thead>
  <tr>
    <th>No.</th>
    <th>Nama</th>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
    <th>No. Tlp.</th>
    <th>Pekerjaan</th>
    <th>Alamat</th>
  </tr>
</thead>
<tbody>
  @php
    $no = 1;
  @endphp
  @foreach($data as $items)
  <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $items->nama_profile }}</td>
    <td>{{ $items->tempat_lhr_profile }}</td>
    <td>{{ $items->tgl_lhr_profile }}</td>
    <td>{{ $items->tlp_profile }}</td>
    <td>{{ $items->uid_work }}</td>
    <td>{{ $items->alamat }}</td>
    <td>
        <form action="{{ route('profile.destroy', $items->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <a type="submit" href="{{ route('profile.edit',$items->id) }}">Edit</a>
            <button type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
        </form>
        </td>
  </tr>
  @endforeach
</tbody>
</table>
@endsection