@extends('template.index')

@section('title')
  Data user

  <a class="btn btn-success" href="{{ route('user.create') }}" style="float: right"> Tambah Data Baru</a>

@endsection

@section('content')


<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama user</th>
        <th scope="col">Role</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $no => $data)
        <tr>
        <td style="width: 10%">{{ ++$no }}</td>
        <td>{{ $data->name }}</td>
        <td>{{ $data->role }}</td>
        <td>{{ $data->email }}</td>
        <td>
          <form action="{{ route('user.destroy',$data->id) }}" method="POST">

              <a class="btn btn-info" href="{{ route('user.show',$data->id) }}">Show</a>

              <a class="btn btn-primary" href="{{ route('user.edit',$data->id) }}">Edit</a>

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