@extends('products.layout')
    @section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Product Management System</h1>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('products.create') }}" class="btn btn-success btn-sm">Add New Product</a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Acrions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)


                                <tr>
                                    <td>{{ $product['id'] }}</td>
                                    <td>{{ $product['name'] }}</td>
                                    <td>{{ $product['description'] }}</td>
                                    <td>{{ $product['image'] }}</td>

                                    <td>
                                        <a href="{{ route('products.show',['id'=>$product['id']]) }}" title="view product"><button class="btn btn-info btn-sm">View</button></a>
                                        <a href="{{ route('products.edit',['id'=>$product['id']]) }}" title="view product"><button class="btn btn-primary btn-sm">Edit</button></a>
                                        <form action="{{ route('products.delete',['id'=>$product['id']]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>

                                            </form>
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
    </div>
@endsection
