@extends('frontend.layout.front')

@section('content')

<div class="mt-5">
    
<div class="container" >
    <h1 class="text-center "> Product Detail</h1>
    <div class="row ">
        <div class="col-sm-6 mt-5">
            <img  src="{{asset('assets/upload/productimage/'.$product->image)}}" style="height:200px;" alt="">
           
        </div>
        <div class="col-sm-6 mt-2">
            <a href="{{route('home1.index')}}" style="font-size:20px;">Go Back</a>
            <h2>Name: {{$product->name}}</h2>
            <h3>Price: {{$product->price}}</h3>
            <h4>Category: {{$product->category}}</h4>
            <p><h4>Description:</h4> {{$product->description}}</p>
<form action="{{route('addtocart.index')}}" method="post">
    @csrf
    <input type="hidden" name="product_id" value="{{$product->id}}">
 <button type="submit" class="btn btn-success">Add to Cart</button>
 </form>
</br>
 <button class="btn btn-primary">Buy now</button>
        </div>
    </div>
</div>
</div>

@endsection