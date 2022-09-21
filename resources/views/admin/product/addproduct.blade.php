@extends('admin.layout.admin')
@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h1 class=""> Add Product</h1>
        
        </div>
        <div class="card-body">
            @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                <div>{{$error}}</div>
                @endforeach
            </div>
            @endif
            <form action="{{route('store.index')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label>Product Name</label>
                    <input type="text" name="name" class="form-control" />
                </div>
                <!-- <div class="mb-3">
                    <label>Slug</label>
                    <input type="text" name="slug" class="form-control" />
                </div> -->
                <div class="mb-3">
                    <label>Price</label>
                    <input type="number" name="price" class="form-control" />
                </div>
               
                <div class="mb-3">
                    <label>Category</label>
                    <input type="text" name="category" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Gallery</label>
                    <input type="text" name="gallery" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control"></textarea>
               
                    <div class="col-md-6 mt-3">
                        <button type="submit" class="float-right btn btn-primary">Save Product</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>





@endsection