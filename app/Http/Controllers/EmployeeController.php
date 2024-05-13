<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Project;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::with('project')->get();
        return view("employee.index",compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::all();
        return view("employee.create",compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //  $validateData=$request->validate([
    //     'title'=>'required|string',
    //     'description'=>'required|string|max:200',
    //     'start_date	'=>'required',
    //     'number_of_member'=>'required|integer',
    
    //  ]);
    //  dd($validateData);
    $validateData=$request->all();
    // dd($validateData);
     $project=new Project();
    //  $project->employee_id = $project->id;
     $project->title= $validateData['title'];
     $project->description= $validateData['description'];
     $project->start_date=$validateData['start_date'];
     $project->number_of_member= $validateData['number_of_member'];
     $project->status=$validateData['status'];
     $project->employee_id =$validateData['employee_id'] ; 
     $project->save();
     return redirect('employee')->with('success','store the data  succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee =Employee::with('project')->whereId($id)->first();
        return view('employee.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
