@extends('layout')

@section('title','Edit Post')


@section('content')
      <div class="container">
          <form action="{{route('post.update')}}" method="POST">
            {{ csrf_field() }}
              <div class="form-group">
                  <label for="">Title</label>
                  <input type="text" name="title" value="{{$post->title}}" class="form-control">
              </div>
              <div class="form-group">
                  <label for="">Description</label>
                  <input type="text" name="description" value="{{$post->description}}" class="form-control">
              </div>
              <div class="form-group">
                  <label for="">Author</label>
                  <input type="text" name="author" value="{{$post->author}}" class="form-control">
              </div>
              <input type="hidden" name="id" value="{{$post->id}}">
              <div class="form-group">
                  <button class="btn btn-primary">Submit</button>
              </div>
          </form>
      </div>
@endsection