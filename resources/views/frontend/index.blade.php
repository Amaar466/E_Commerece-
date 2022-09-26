@extends('frontend.layout.front')

@section('content')

<div class="container">
   
    <h2 class="text-center mt-5" style="padding-top:20px;">E_Commerece Project</h2>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
 
    @foreach($product as $pro)
    <div class="carousel-item  {{$pro['id'] ==7?'active':''}}">
      <img src="{{asset('assets/upload/productimage/'.$pro->image)}}" class="d-block w-100" style="height:400px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="font-size:20px;">{{$pro->name}}</h5>
       
        <p>{{$pro->description}}</p>
        <!-- <?php
       // dd($pro->description);
        ?> -->
      </div>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<div class="container mt-2">
    <h1 class="text-center">Trending Product</h1>
<div class="row">
@foreach($product as $pro)

<div class="col-lg-4  mt-4">
    <a href="{{ route('detail.index', [$pro->id])}}">
       
    <img src="{{asset('assets/upload/productimage/'.$pro->image)}}" class="d-block w-100 " style="height:200px;" alt="...">
    <h5 style="font-size:20px;" class="text-center">{{$pro->name}}</h5>
    </a>
</div>
@endforeach
</div>
</div>
@endsection