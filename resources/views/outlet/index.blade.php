@extends('template.index')

@section('title')
  Data Outlet

  <a class="btn btn-success" href="{{ route('outlet.create') }}" style="float: right"> Tambah Data Baru</a>

@endsection

@section('content')


<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Outlet</th>
        <th scope="col">Alamat</th>
        <th scope="col">tlp</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($outlets as $no => $data)
        <tr>
        <td style="width: 10%">{{ ++$no }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->alamat }}</td>
        <td>{{ $data->tlp }}</td>
        <td>
          <form action="{{ route('outlet.destroy',$data->id) }}" method="POST">

              <a class="btn btn-info" href="{{ route('outlet.show',$data->id) }}">Show</a>

              <a class="btn btn-primary" href="{{ route('outlet.edit',$data->id) }}">Edit</a>

              @csrf
              @method('DELETE')

              <button type="submit" class="btn btn-danger">Delete</button>
          </form>
      </td>
    </tr>
    @endforeach
</tbody>
  </table>
@endsection