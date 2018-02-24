@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header text-center">PRODUCTS</div>

                <div class="card-body">
                    <table class="table table-hover">
                      <thead>
                        <th>S/N</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                      @foreach($products as $product)
                        <tr>
                          <td>{{ $product->id }}</td>
                          <td><img src="{{ asset($product->image) }}" height="50px" width="50px"></td>
                          <td>{{ $product->name }}</td>
                          <td>{{ str_limit($product->description, 100) }}</td>
                          <td>
                            <a href="{{ route('products.edit', ['id' => $product->id])}}" class="btn btn-sm btn-secondary" style="padding:2px;">Edit</a>
                            <a href="{{ route('products.destroy', ['id' => $product->id])}}" class="btn btn-sm btn-danger" style="padding:2px;">Delete</a>
                          </td>
                        </tr>
                      @endforeach  
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
