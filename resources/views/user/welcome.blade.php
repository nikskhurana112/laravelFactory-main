@extends('layout')

@section('title','Login User')


@section('content')

  <div class="container mt-4" style="margin-top: 2rem">
    <h1>Welcome! user {{Auth::user()->name}}  </h1>
  </div>

@endsection