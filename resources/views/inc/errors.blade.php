@if($errors->any())
  <div class="alert alert-danger">
    @foreach ($errors->all() as $item)
      <p>{{$item}}</p>
    @endforeach
  </div>
@endif

@if(session()->has("success"))
<div class="alert alert-success">
  <b> {{ session()->get("success") }} </b>
</div>
@endif



@if(session()->has("unsuccess"))
<div class="alert alert-danger">
  <b> {{ session()->get("unsuccess") }} </b>
</div>
@endif

