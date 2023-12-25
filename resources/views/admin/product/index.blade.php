@extends('layouts.admin')

@section('title', $viewData['title'])

@section('content')
       <div class="card">

           <div class="cord-header">Manage  - Products </div>
                    
           <div class="cord-body">
            <div>
                <a href="{{ route('admin.product.create')}}">
                    <button type="button" class="btn btn-primary float-end">
                        Create Product
                    </button>
                </a>
                <br>
            </div>
           
           <!-- <div class="card-body">Welcome to the Admin Panel,use the sidbar Panel to naveget the different option -->
<table class="table table-bordered table-striped">
<br>    
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($viewData['products'] as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        @endforeach
    </tbody>
</table>
           </div>
       </div>


@endsection