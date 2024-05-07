@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>edit the data</h2><br><br>
                @if (session()->has('success'))
                    <div class="alert alert-info">
                        {{ session()->get('success') }}
                    </div>
                @endif
                @if (session()->has('error'))
            <div clsaa="alert alert-info">
                {{ session()->get('error') }}
            </div>
        @endif
                <a href="{{ route('product.index') }}" class="btn btn-danger float-end">Back !</a>
                <form action="{{ route('product.update', '$data->id') }}" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label>Product Name:</label>
                        <input type="text" class="form-control" id="name" value="{{ $data->name }}"
                            placeholder="Enter the product name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="price">Product Price:</label>
                        <input type="text" class="form-control" id="price" value="{{ $data->price }}"
                            placeholder="Enter the price" name="price">
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
