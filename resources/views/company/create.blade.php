@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Add the company information</h2><br><br>
                @if (session()->has('error'))
                    <div class="alert alert-info">
                        {{ session()->get('error') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('company.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter the company name"
                            name="Name">
                    </div>
                    <div class="mb-3">
                        <label>Contact number</label>
                        <input type="text" class="form-control" id="contact_number" placeholder="Enter the number"
                            name="Contact number">
                    </div>
                    <div class="mb-3">
                        <label>Secondary Contact number</label>
                        <input type="text" class="form-control" id="secondary_contact_number"
                            placeholder="Enter the secondary number" name="secondary_contact_number">
                    </div>
                    <div class="mb-3">
                        <label>Email address</label>
                        <input type="email" class="form-control" id="email_address" placeholder="Enter the email"
                            name="Email address">
                    </div>
                    <div class="mb-3">
                        <label>GST number</label>
                        <input type="text" class="form-control" id="gst_number" placeholder="Enter the GST number"
                            name="GST_number">
                    </div>
                    <div class="mb-3">
                        <label>Address</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter the address"
                            name="Address">
                    </div>
                    <div class="mb-3">
                        <label>Status</label>
                        <input type="text" class="form-control" id="status" placeholder="status" name="status">
                    </div>
                    <h2>Add the Employee information</h2><br><br>
                     {{-- <div class="mb-3">
                        <label>company id</label>
                        <input type="text" class="form-control" id="company id" placeholder="Enter the company id"
                            name="company_id"> --}}
                    <div class="mb-3">
                        <label>employee id</label>
                        <input type="text" class="form-control" id="employee" placeholder="Enter the employee id"
                            name="employee_id">
                    </div>
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter the employee name"
                            name="Employee_Name">
                    </div>
                    <div class="mb-3">
                        <label>Age</label>
                        <input type="text" class="form-control" id="age" placeholder="Enter the age"
                            name="Age">
                    </div>
                    <div class="mb-3">
                        <label>designation</label>
                        <input type="text" class="form-control" id="designation" placeholder="Enter the designationr"
                            name="designation">
                    </div>
                    <div class="mb-3">
                        <label>address</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter the email"
                            name="address">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
