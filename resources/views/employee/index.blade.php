@extends('layout.app')

@section('content')
    <div class="container ">
        <h2>Company Table</h2>
        @if (session()->has('success'))
            <div class="alert alert-info">
                {{ session()->get('success') }}
            </div>
        @endif
        <a href="{{ route('employee.create') }}" class="btn btn-info float-end">add the company</a>
        <table class="table">

            <thead>
            
                <tr>
                    <th>s.no</th>
                    <th>project title</th>
                    <th>project description</th>
                    <th>employee_id</th>
                </tr>

            </thead>
             <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $loop->iteration . '.' }}</td>
                        @foreach ($employee->project as $employee)
                        <td>{{$employee->title}}</td>
                        <td>{{$employee->description }}</td>
                        <td>{{$employee->employee_id}}</td>
                        @endforeach
                        


                        <td>
                        <a href="{{ route('employee.show', $employee->id) }}" class="btn btn-info ">show</a>
                        <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-info">edit</a>
                        <form action="{{ route('employee.destroy', $employee->id) }}" method="post" style="display:inline"
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

