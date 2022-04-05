@extends('layout')

@section('title','Login User')


@section('content')

  <div class="container mt-4" style="margin-top: 2rem">
      <form action="{{route("user.do.login")}}" method="POST">
        {{ csrf_field() }}
            <div class="card">
              <div class="card-body">

                @include("inc.errors")

                  <div class="row">

                    <div class="col-md-12">
                        <label for="">Mobile</label>
                        <input type="text" name="mobile" class="form-control">
                    </div>

                    <div class="col-md-12 ">
                        <label for="">Password</label>
                        <input type="text" name="password" class="form-control">
                    </div>

                    <div class="col-md-6 mt-3">
                        <button class="btn btn-primary">Login</button>
                    </div>

                    <div class="col-md-12 m-4">
                        <a href="{{route("user.register")}}">Dont have account yet?</a>
                    </div>

                  </div>
              </div>
          </div>
      </form>
  </div>

@endsection