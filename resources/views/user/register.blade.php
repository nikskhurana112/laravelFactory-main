@extends('layout')

@section('title','Register User')


@section('content')

  <div class="container mt-4" style="margin-top: 2rem">
      <form action="{{route("user.do.register")}}" method="POST">
        {{ csrf_field() }}
          <div class="card">
              <div class="card-body">

                  @include("inc.errors")

                  <div class="row">

                      <div class="col-md-4">
                          <label for="">Name</label>
                          <input type="text" name="name" class="form-control">
                      </div>

                      <div class="col-md-4">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>

                    <div class="col-md-4">
                        <label for="">Mobile</label>
                        <input type="text" name="mobile" class="form-control">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="">Password Confirmation</label>
                        <input type="password" name="password_confirmation" class="form-control">
                    </div>

                    <div class="col-md-6 mt-3">
                        <button class="btn btn-primary">Register</button>
                    </div>

                    <div class="col-md-12 m-4">
                        <a href="{{route("user.login")}}">Already, Have a account?</a>
                    </div>

                  </div>
                  
              </div>
          </div>
      </form>
  </div>

@endsection