@extends('layout')

@section('title', 'List User')

@section('content')

<div class="container mt-3">
    <table class="table table-bordered">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Mobile</td>
            <td>Email</td>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->mobile}}</td>
            <td>{{$user->email}}</td>
            <td><a href="{{route('user.post', ['id' => $user->id])}}">See Post</a></td>
        </tr>
        @endforeach
    </table>
</div>
{{$users->links()}}
@endsection