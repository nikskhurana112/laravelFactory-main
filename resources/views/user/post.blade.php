@extends('layout')

@section('title', 'List User')

@section('content')

<h1>Latest posts from {{$user->name}}</h1>
<div class="container mt-3">
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Comments</th>
        </tr>
        @foreach($user->posts->reverse() as $item)
            <tr>
                <td>{{$item->title}}</td>
                <td>{{$item->description}}</td>
                <td>
                    @if($item->img_path != null)
                        <img src="{{URL('storage/'.$item->img_path)}}" alt="" style="width:50px">
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection