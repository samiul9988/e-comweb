@extends('products.layout')
    @section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Product Management System</h1>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>

                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Image</th>

                                </tr>
                            </thead>
                            <tbody>

 

                                <tr>

                                    <td>{{ $product['name'] }}</td>
                                    <td>{{ $product['description'] }}</td>
                                    <td>{{ $product['image'] }}</td>


                                </tr>

                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
