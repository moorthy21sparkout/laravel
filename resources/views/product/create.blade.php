@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Add the data</h2><br><br>
                <form action="{{route('product.store',)}}" method="post">
                @csrf
                    <div class="mb-3">
                        <label >Product Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter the product name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="price">Product Price:</label>
                        <input type="text" class="form-control" id="price" placeholder="Enter the price" name="price">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

