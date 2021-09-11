@extends('template.index')

@section('title')
    Tambah Data
    <a class="btn btn-success" href="{{ route('user.index') }}" style="float: right"> Back</a>

@endsection

@section('content')

<form action="{{ route('user.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama :</strong>
                <input type="text" name="name" class="form-control" placeholder="name" value="{{old('name')}}">
            </div>
        </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Role : </strong>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="role" value="owner" checked>
                <label class="form-check-label">
                 Owner
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="role" value="admin">
                <label class="form-check-label">
                 Admin
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="role" value="kasir">
                <label class="form-check-label">
                 Kasir
                </label>
              </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email :</strong>
                <input type="text" name="email" class="form-control" placeholder="email" value="{{old('email')}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>password :</strong>
                <input type="password" name="password" class="form-control" placeholder="password" value="{{old('password')}}">
            </div>
        </div>

      
         
 
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5 mb-5">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>

@endsection