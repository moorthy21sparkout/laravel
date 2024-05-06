<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\worker;

class workercontroller extends Controller
{
  public function index()
  {
    $workers = worker::all();
    return view("worker.index", ['worker' => $workers]);

  }
  public function create()
  {
    return view('worker.create');
  }
  public function store(Request $request)
  {
    $data = $request->validate([
      'name' => 'required',
      'age' => 'required',
      'mobile' => 'required', // validate the input value

    ]);
    $newEmploy = worker::create($data);
    return redirect(route('worker.index'));  //go to the index page
  }
  public function edit(worker $worker)
  {         //module and worker variable
    return view('worker.edit', ['worker' => $worker]);
  }
  public function update(worker $worker, Request $request)
  {
    $data = $request->validate([
      'name' => 'required',
      'age' => 'required',
      'mobile' => 'required',
    ]);
    $worker->update($data);
    return redirect(route('worker.index'))->with('success,update');
  }
  public function destroy(worker $worker)
  {
    $worker->delete();
    return redirect(route('worker.index'))->with('success,deleted');
  }
}
