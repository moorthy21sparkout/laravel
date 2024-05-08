@extends('layout.app')

@section('content')
    <div class="container ">
        <h2>product Table</h2>
        @if (session()->has('success'))
            <div class="alert alert-info">
                {{ session()->get('success') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-info">
                {{ session()->get('error') }}
            </div>
        @endif
        <a href="{{ route('product.create') }}" class="btn btn-info float-end">add the product</a>
        <table class="table">
        
            <thead>
                <tr>
                    <th>s.no</th>
                    <th>product name</th>
                    <th>product price</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($data as $dt)
                    <tr>
                        <td>{{$loop->iteration."."}}</td>
                        <td>{{ $dt->name }}</td>
                        <td>{{ $dt->price }}</td>
                        <td>
                            <a href="{{ route('product.show', $dt->id) }}" class="btn btn-info">show</a>
                            <a href="{{ route('product.edit', $dt->id) }}" class="btn btn-info">edit</a>
                            <form action="{{ route('product.destroy', $dt->id) }}" method="post" style="display:inline"
                                onsubmit="return confirm('are you delete the data ? ')">
                                @csrf
                                @method('delete')
                                <input type="submit" value="delete" class= "btn btn-danger">
                            </form>
                    </tr>
                @endforeach
        </table>
    </div>
@endsection
