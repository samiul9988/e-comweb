@extends('products.layout')
@section('content')
    <div class="card" style="margin:20px;">
        <div class="card-header">Create New Product</div>
        <div class="card-body">

            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">

                @csrf
                <label for="">Name</label></br>
                <input type="text" name="name" id="name" class="form-contorl"></br>
                <label for="">Description</label></br>
                <input type="text" name="description" id="description" class="form-contorl"></br>
                <label for="">Image</label></br>
                <input type="file" name="image" id="image" class="form-contorl"></br></br>
                <input type="submit" value="Save" class="btn btn-success" name="" id=""></br>
            </form>

        </div>
    </div>
@endsection
