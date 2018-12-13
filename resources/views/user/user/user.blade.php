@extends('user.template.base')
@section('content')
<table>
<thead>
  <tr>
    <th>No.</th>
    <th>Email</th>
    <th>Username</th>
    <th>Password</th>
  </tr>
</thead>
<tbody>
  @php
    $no = 1;
  @endphp
  @foreach($data as $items)
  <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $items->email }}</td>
    <td>{{ $items->username }}</td>
    <td>{{ $items->password }}</td>
    <td>
        <form action="{{ route('user.destroy', $items->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <a type="submit" href="{{ route('user.edit',$items->id) }}">Edit</a>
            <button type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
        </form>
    </td>
  </tr>
  @endforeach
</tbody>
</table>
@endsection