@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Add the project</h2><br><br>
                @if (session()->has('error'))
                    <div class="alert alert-info">
                        {{ session()->get('error') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('employee.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label>title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter the project title"
                            name="title">
                    </div>
                    <div class="mb-3">
                        <label> description</label>
                        <input type="text" class="form-control" id="description" placeholder="Enter the description"
                            name="description">
                    </div>
                    <div>
                        <select class="form-select" aria-label="Default select example " name="employee_id">
                            <option selected>Employee_id</option>
                            @foreach($employees as $employee)
                            <option value={{$employee->id}}>{{$employee->id}}</option>
                               @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>start_date</label>
                        <input type="date" class="form-control" id="date" placeholder="Enter the date"
                            name="start_date">
                    </div>
                    <div class="mb-3">
                        <label>number_of_member</label>
                        <input type="text" class="form-control" id="member" placeholder="Enter the member"
                            name="number_of_member">
                    </div>
                     <div class="mb-3">
                        <label>status</label>
                        <input type="text" class="form-control" id="member" placeholder="Enter the member"
                            name="status">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
