@extends('template.index')

@section('title')
    Tambah Data
@endsection

@section('content')

<form action="{{ route('member.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama :</strong>
                <input type="text" name="nama" class="form-control" placeholder="nama" value="{{old('nama')}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Jenis Kelamin : </strong>
        <div class="form-check mb-2">
            <input class="form-check-input" type="radio" name="jenis_kelamin" value="L" checked>
            <label class="form-check-label">
             Laki - Laki
            </label>
          </div>
          <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="jenis_kelamin" value="P">
            <label class="form-check-label">
             Perempuan
            </label>
          </div>
          
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Hp :</strong>
                <input type="number" name="tlp" class="form-control" placeholder="tlp" value="{{old('tlp')}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Alamat :</label>
            <textarea class="form-control" name="alamat" value="alamat" rows="3"></textarea>
          </div>

         
 
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5 mb-5">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>

@endsection