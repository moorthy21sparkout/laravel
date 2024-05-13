@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>edit the  company information</h2><br><br>
                <form method="POST" action="{{ route('company.update',$company->id) }}">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter the company name"
                            name="Name" value={{$company->Name}} >
                            @error('Name')
                            <div>{{$message}}</div>
                            @enderror
                            
                    </div>
                    <div class="mb-3">
                        <label>Contact number</label>
                        <input type="text" class="form-control" id="contact_number" placeholder="Enter the number"
                            name="Contact number" value={{$company->Contact_number}}>
                            @error('Contact_number')
                            <div>{{$message}}</div>
                            @enderror
                            
                    </div>
                    <div class="mb-3">
                        <label>Secondary Contact number</label>
                        <input type="text" class="form-control" id="secondary_contact_number"
                            placeholder="Enter the secondary number" name="secondary_contact_number" value={{$company->secondary_contact_number}}>
                            @error('secondary_contact_number')
                            <div>{{$message}}</div>
                            @enderror
                            
                    </div>
                    <div class="mb-3">
                        <label>Email address</label>
                        <input type="email" class="form-control" id="email_address" placeholder="Enter the email"
                            name="Email_address" value={{$company->Email_address}}>
                            @error('Email_address')
                            <div>{{$message}}</div>
                            @enderror
                            
                    </div>
                    <div class="mb-3">
                        <label>GST number</label>
                        <input type="text" class="form-control" id="gst_number" placeholder="Enter the GST number"
                            name="GST_number" value={{$company->GST_number}}>
                            @error('GST_number')
                            <div>{{$message}}</div>
                            @enderror
                            
                    </div>
                    <div class="mb-3">
                        <label>Address</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter the address"
                            name="Address" value={{$company->Address}}>
                            @error('Address')
                            <div>{{$message}}</div>
                            @enderror
                            
                    </div>
                    <div class="mb-3">
                        <label>Status</label>
                        <input type="text" class="form-control" id="status" placeholder="status" name="status" value={{$company->status}}>
                        @error('status')
                            <div>{{$message}}</div>
                            @enderror
                            
                    </div>
                    <h2>Add the Employee information</h2><br><br>
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter the employee name"
                            name="Employee_Name" value={{$company->employee->Name}}>
                            @error('Employee_Name')
                            <div>{{$message}}</div>
                            @enderror
                            
                    </div>
                    <div class="mb-3">
                        <label>Age</label>
                        <input type="text" class="form-control" id="age" placeholder="Enter the age"
                            name="Age" value={{$company->employee->Age}}>
                            @error('Age')
                            <div>{{$message}}</div>
                            @enderror
                            
                    </div>
                    <div class="mb-3">
                        <label>designation</label>
                        <input type="text" class="form-control" id="designation" placeholder="Enter the designationr"
                            name="designation" value={{$company->employee->designation}}>
                            @error('designation')
                            <div>{{$message}}</div>
                            @enderror
                            
                    </div>
                    <div class="mb-3">
                        <label>address</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter the email"
                            name="address"  value={{$company->employee->address}}>
                            @error('address')
                            <div>{{$message}}</div>
                            @enderror
                            
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
