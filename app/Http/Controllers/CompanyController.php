<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::with('employee')->get(); //related employee
        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             $validatedData = $request->validate([
             'Name' => 'required|string|max:255',
             'Contact_number' => 'required', // Consider phone number format validation
             'secondary_contact_number' => 'required', // Consider phone number format validation
             'Email_address' => 'required|max:255',
             'GST_number' => 'required|max:255', // Assuming GST number format validation
             'Address' => 'required|max:255',
             'status' => 'required|string',
             // Employee data validation 
             'employee_id' => 'required|integer', // Assuming foreign key relationship
             'Employee_Name' => 'required|string|max:255',
             'Age' =>'required|integer', // Assuming minimum employee age
            'designation' => 'required|string',
           'address'=>'required',
             ]);
            $validatedData=$request->all();
             $companyobj = new Company();
             $companyobj->name = $validatedData['Name'];
             $companyobj->Contact_number = $validatedData['Contact_number'];
             $companyobj->secondary_contact_number= $validatedData['secondary_contact_number'];
             $companyobj->Email_address = $validatedData['Email_address'];
             $companyobj->GST_number= $validatedData['GST_number'];
             $companyobj->Address = $validatedData['Address'];
             $companyobj->status= $validatedData['status'];
             $companyobj->save();

             $employe=new Employee();
             $employe->company_id = $companyobj->id;
             $employe->employee_id = $validatedData['employee_id'];
             $employe->Name= $validatedData['Employee_Name'];
             $employe->Age=$validatedData['Age'];
             $employe->designation=$validatedData['designation'];
             $employe->address=$validatedData['address'];
             $employe->save();

        return redirect('company')->with('success', 'Company created successfully.');


             
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $companies = Company::with('employee')->whereId($id)->first();
        return view('company.show',compact('companies'));
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company= Company::with('employee')->findOrFail($id);
        return view('company.edit',compact('company'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    $company = Company::with('employee')->whereId($id)->first();

    $validatedData = $request->validate([
        'Name' => 'required|string|max:255',
        'Contact_number' => 'required', // Consider phone number format validation
        'secondary_contact_number' => 'required', // Consider phone number format validation
        'Email_address' => 'required|max:255',
        'GST_number' => 'required|max:255', // Assuming GST number format validation
        'Address' => 'required|max:255',
        'status' => 'required|string',
        // Employee data validation 
        'Employee_Name' => 'required|string|max:255',
        'Age' =>'required|integer', // Assuming minimum employee age
        'designation' => 'required|string',
        'address'=>'required',
    ]);

    // Update company details
    $company->update([
        'Name' => $validatedData['Name'],
        'Contact_number' => $validatedData['Contact_number'],
        'secondary_contact_number' => $validatedData['secondary_contact_number'],
        'Email_address' => $validatedData['Email_address'],
        'GST_number' => $validatedData['GST_number'],
        'Address' => $validatedData['Address'],
        'status' => $validatedData['status'],
    ]);

    // Update associated employee details
    $company->employee->update([
        'Employee_Name' => $validatedData['Employee_Name'],
        'Age' => $validatedData['Age'],
        'designation' => $validatedData['designation'],
        'address' => $validatedData['address'],
    ]); 

    return redirect('company')->with('success', 'Company updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
      $company = Company::findOrFail($id)->delete($request->all());
      return redirect('company')->with('success', 'deleted successfully.');
    }
}
