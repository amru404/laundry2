@extends('template.index')

@section('title')
    Tambah Data
    <a class="btn btn-success" href="{{ route('outlet.index') }}" style="float: right"> Back</a>

@endsection

@section('content')

<form action="{{ route('outlet.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama :</strong>
                <input type="text" name="nama" class="form-control" placeholder="nama" value="{{old('nama')}}">
            </div>
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