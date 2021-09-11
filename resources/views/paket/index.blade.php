@extends('template.index')

@section('title')
  Data Paket

  <a class="btn btn-success" href="{{ route('paket.create') }}" style="float: right"> Tambah Data Baru</a>

@endsection

@section('content')


<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Id outlet</th>
        <th scope="col">Jenis</th>
        <th scope="col">Nama paket</th>
        <th scope="col">harga</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($pakets as $no => $data)
        <tr>
        <td style="width: 10%">{{ ++$no }}</td>
        <td>{{ $data->outlet_id }}</td>
        <td>{{ $data->jenis }}</td>
        <td>{{ $data->nama_paket }}</td>
        <td>{{ $data->harga }}</td>
        <td>
          <form action="{{ route('paket.destroy',$data->id) }}" method="POST">

              <a class="btn btn-info" href="{{ route('paket.show',$data->id) }}">Show</a>

              <a class="btn btn-primary" href="{{ route('paket.edit',$data->id) }}">Edit</a>

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