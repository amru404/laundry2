@extends('template.index')

@section('title')
    Edit Data
    <a class="btn btn-success" href="{{ route('member.index') }}" style="float: right"> Back</a>

@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            

  
    <form action="{{ route('member.update',$member->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama :</strong>
                    <input type="text" name="nama" value="{{ $member->nama }}" class="form-control" placeholder="Nama">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Jenis Kelamin</strong>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="L" checked>
                <label class="form-check-label">
                 Laki - Laki
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="P">
                <label class="form-check-label">
                 Perempuan
                </label>
              </div>


              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No Hp:</strong>
                    <input type="text" name="tlp" value="{{ $member->tlp }}" class="form-control" placeholder="No Hp">
                </div>
            </div>
         
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Alamat :</label>
                <textarea class="form-control" name="alamat" value="alamat" rows="3">{{$member -> alamat}}</textarea>
              </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5 mb-5">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection

