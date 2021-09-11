@extends('template.index')

@section('title')
    Tambah Data
    <a class="btn btn-success" href="{{ route('paket.index') }}" style="float: right"> Back</a>

@endsection

@section('content')

<form action="{{ route('paket.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id outlet :</strong>
                <input type="text" name="outlet_id" class="form-control" placeholder="outlet_id" value="{{old('outlet_id')}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis :</strong>
                <input type="text" name="jenis" class="form-control" placeholder="jenis" value="{{old('jenis')}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama paket :</strong>
                <input type="text" name="nama_paket" class="form-control" placeholder="nama_paket" value="{{old('nama_paket')}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga :</strong>
                <input type="text" name="harga" class="form-control" placeholder="harga" value="{{old('harga')}}">
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5 mb-5">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>

@endsection