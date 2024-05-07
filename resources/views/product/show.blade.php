@extends('layout.app')
@section('content')
<div class="container mt-3">
<h2 class="text-center">product data</h2>
<a href="{{route('product.index')}}" class="btn btn-danger float-end">Back !</a>
<div class="col-md-6">
<p>product name: {{$data->name}}</p>
<p>product price: {{$data->price}}</p>
</div>
</div>
@endsection