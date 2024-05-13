@extends('layout.app')
@section('content')
<div class="container mt-3">
<h2 class="text-center">all informations</h2>
<a href="{{route('company.index')}}" class="btn btn-danger float-end">Back !</a>
<div class="col-md-6">

                       <p> <b>company name :</b>{{$companies->Contact_number }}</p>
                        <p><b>Company email:</b>{{$companies->Email_address }}</p>
                        <p><b>company Address:</b>{{$companies->Address }}</p>
                        <p><b>company secoundry number:</b>{{ $companies->secondary_contact_number }}</p>
                        <p><b>Company status:</b>{{ $companies->status}}</p>
                         <p><b>Employe name:</b>{{$companies->employee->Name }}<p>
                         <p><b>Employe id:</b>{{$companies->employee->employee_id }}<p>
                         <p><b>Employee age:</b>{{$companies->employee->Age }}<p>
</div>
</div>
@endsection