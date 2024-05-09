@extends('layout.app')

@section('content')
<h2>student information</h2>
 {{-- store the infromation --}}
        @if (session('success'))
            <div style="color:green;">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('student.create') }}" class="btn btn-info float-end">add the information</a>
        <table class="table">
        
            <thead>
                <tr>
                    <th>s.no</th>
                    <th>name</th>
                    <th>email</th>
                    <th>password</th>
                </tr>
            </thead>
        </table>
@endsection