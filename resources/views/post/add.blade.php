@extends('layout')

@section('title','Create Post')


@section('content')
      <div class="container">
        @include("inc.errors")
            <form action="{{route('user.post.create')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">



                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" required placeholder="Enter Something great">
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control" id="" required rows="3"></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Image</label>
                            <input name="image" type="file" accept="images/*"/>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                           <button class="btn btn-success">Submit</button>
                        </div>
                    </div>


                </div>
            </form>
      </div>
@endsection