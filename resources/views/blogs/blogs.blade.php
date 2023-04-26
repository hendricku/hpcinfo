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

@foreach($blogs as $key => $blog)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            @if($key == 1| $key == 2)
                                <img src="https://th.bing.com/th?id=OIP.8yXm-HsNkCLx3IDIxVJb1QHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2" class="card-img-top" alt="{{ $blog->category }}">
                            @else
                                
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $blog->name }}</h5>
                                <p class="card-text">Unit: {{ $blog->unit }}</p>
                                <p class="card-text">Unit Price: {{ $blog->unitPrice }}</p>
                                <p class="card-text">Category: {{ $blog->category }}</p>
                                <p class="card-text">image: {{ $blog->image }}</p>
                                <a href="/blog/{{ $blog->id }}" class="btn btn-info">View Details</a>
                            </div>
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