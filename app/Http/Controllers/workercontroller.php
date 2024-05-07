<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\worker;  

class workercontroller extends Controller
{
  //index function
  public function index()
  {
    $workers = worker::all();
    return view("worker.index", ['worker' => $workers]);

  }
  //create function
  public function create()
  {
    return view('worker.create');
  }
  //Request is the method parameters
  public function store(Request $request)
  {
    //error conditions
    try {
      $data = $request->validate([
        'name' => 'required|string|max:200',
        'age' => 'required|string',
        'mobile' => 'required|numeric|digits:10',


      ]);
      $newEmploy = worker::create($data);
      return redirect(route('worker.index'))->with('success', 'store the information');
    } catch (\Exception $e) {
      return redirect(route('worker.create'))->with('error', 'fill the all informartion')->with('error', $e->getMessage());
    }
  }
  //edit  function
  public function edit(worker $worker)
  {         //module and worker variable
    return view('worker.edit', ['worker' => $worker]);
  }
  //update information
  public function update(worker $worker, Request $request)
  {
    //error check
    try {
      //validation 
      $data = $request->validate([
        'name' => 'required|string|max:200',
        'age' => 'required|string',
        'mobile' => 'required|numeric|',
      ]);
      $worker->update($data);
      return redirect(route('worker.index'))->with('success', 'data successfully updated');
      //exception ->it is a global namespace,$e->variable.
    } catch (\Exception $e) {
      $data = $request->validate([
        'name' => 'required|string|max:200',
        'age' => 'required|string',
        'mobile' => 'required|numeric|digits:10',
      ]);
      $worker->update($data);
      return redirect(route('worker.edit'))->with('error', 'not be upadte the data');
    }
  }
  public function destroy(worker $worker)
  {  //delete the data
    try {
      $worker->delete();
      return redirect(route('worker.index'))->with('delete', 'data deleted');
    } catch (\Exception $e) {
      return redirect(route('worker.index'))->with('not', 'data not be deleted');
    }
  }
}