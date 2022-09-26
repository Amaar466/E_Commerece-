@extends('frontend.layout.front')

@section('content')


<div class="container mt-2">
    
<div class="row">
@foreach($product as $pro)
<?php
dd($pro);
?>
<div class="search-item">
    <a href="{{ route('detail.index', [$pro->id])}}">
       
    <img src="{{asset('assets/upload/productimage/'.$pro->image)}}" class="d-block w-100 " style="height:200px;" alt="...">
    <h5 style="font-size:20px;" class="text-center">{{$pro->name}}</h5>
    </a>
</div>
@endforeach
</div>
</div>
@endsection