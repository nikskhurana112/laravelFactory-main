@extends('layout')

@section('title','Latest Post')


@section('content')
      <div class="container">
          <table class="table table-bordered table-striped table-hover">
              <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Author</th>
                  <th>Delete</th>
              </tr>
              @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->author}}</td>
                    <td>
                        <a href="{{ route("post.delete",[ 'id' => $post->id ]) }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                    <td>
                        <a href="{{ route("post.edit",[ 'id' => $post->id ]) }}" class="btn btn-success btn-sm">Edit</a>
                    </td>
                </tr>
              @endforeach
          </table>
          {{$posts->links()}}
      </div>
@endsection