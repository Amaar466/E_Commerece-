@extends('admin.layout.admin')

@section('content')


<div class="container-fluid px-4">
<div class="card mt-4">
    <div class="card-header">
    <div class=" d-md-flex justify-content-md-end">
  <button class="btn btn-primary me-md-2 " type="button"><a href="{{url('add.index')}}" class="text-white ">Add Product</a></button>
  
</div>
        <h4>View Product</h4>
    </div>
    <div class="card-body">

    @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <table id="mydatatable" class="table table-bordered ">
                <thead>
                    <tr>
                        <th >ID</th>
                        <th >Product Name</th>
                        <th>Price</th>
                        <th>Gallary</th>
                        <th>image</th>
                        <th >Description</th>
                        
      
                    </tr>
                </thead>
                <tbody> 
                  @foreach
                    <tr >
                        <td></td>
                        <td></td>
                        <td>
                        <img src="" style="width:50px;height:50px;">
                        </td>
                        <td></td>
                        <td><a href="#" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>
                   
                </tbody>
            </table>
    </div>
</div>


</div>
@endsection