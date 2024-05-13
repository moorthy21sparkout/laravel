@extends('layout.app')

@section('content')
    <div class="container ">
        <h2>Company Table</h2>
        @if (session()->has('success'))
            <div class="alert alert-info">
                {{ session()->get('success') }}
            </div>
        @endif
        <a href="{{ route('company.create') }}" class="btn btn-info float-end">add the company</a>
        <table class="table">

            <thead>
            
                <tr>
                    <th>s.no</th>
                    <th>company name</th>
                    <th>Contact number</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Employee name</th>

                </tr>

            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ $loop->iteration . '.' }}</td>
                        <td>{{ $company->Name }}</td>
                        <td>{{ $company->Contact_number }}</td>
                        <td>{{ $company->Email_address }}</td>
                        <td>{{$company->Address}}</td>
                        <td> {{ $company->employee->Name }} </td>


                        <td>
                        <a href="{{ route('company.show', $company->id) }}" class="btn btn-info ">show</a>
                        <a href="{{ route('company.edit', $company->id) }}" class="btn btn-info">edit</a>
                        <form action="{{ route('company.destroy', $company->id) }}" method="post" style="display:inline"
                            onsubmit="return confirm('are you delete the data ? ')">
                            @csrf
                            @method('delete')
                            <input type="submit" value="delete" class= "btn btn-danger">
                        </form>
                        </td>
                    </tr>
                @endforeach
        </table>

    </div>
@endsection
