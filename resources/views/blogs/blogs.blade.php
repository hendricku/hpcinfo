@extends('layout')

@section('content')
<div class ="row">
@section('name','content')
<h1>{{  $heading }} </h1>
<p class="lead">
  Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
</p>

<hr style='color:black'>

<div class='d-flex flex-row flex-wrap' style='padding:20px'>
@foreach($blogs as $blog)
<div class="card" style="width: 18rem; margin-right:10px">
  <div class="card-body">
    <h5 class="card-title">{{$blog['name']}}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">{{$blog['unit']}}</h6>
    <p class="card-text">{{$blog['category']}}</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">''Another link''</a>
  </div>
</div>


@endforeach

</div>

<div class="row">
    <div class="col-2">
    <a href="/blogs/create" class = "btn btn-primary" >New blog Form </a>
    </div>
</div>
@endsection