@extends('template.index')

@section('title')
    Edit Data
    <a class="btn btn-success" href="{{ route('user.index') }}" style="float: right"> Back</a>

@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            

  
    <form action="{{ route('user.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name :</strong>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Name">
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
                    <input type="email" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password :</strong>
                    <input type="password" name="password" value="{{ $user->password }}" class="form-control" placeholder="password">
                </div>
            </div>
         
        

            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5 mb-5">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection

