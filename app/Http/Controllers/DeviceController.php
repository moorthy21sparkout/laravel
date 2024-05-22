<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\phone;
use Egulias\EmailValidator\Result\ValidEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DeviceController extends Controller
{
    //    function getlist($id){
    //     //return 'hi';
    //     return Device::find($id);
    //    }
    // opptional result
    function getlist()
    {
        // If an ID is provided, find and return the specific device by ID.
        // Otherwise, return all devices.
        // return $id ? Device::find($id) : Device::all();
        // return [[Device::all()],[phone::all()]];
        return Http::get('http://192.168.1.199/data');
    }
    function store(Request $request)
    {
        $device = new Device();
        $device->name = $request->name;
        $device->age = $request->age;
        $result = $device->save();
        if ($result) {
            return ["Result" => "data successfully store"];
        } else {
            return ["Result" => "data not be store"];
        }
    }
    function update(Request $request)
    {
        $device=Device::find($request->id);
        $device->name=$request->name;
        $device->age=$request->age;
        $result=$device->save();
        if($result){
        return ["Result" => "update successfully"];
        }else{
            return ["result"=>"sorry..! data not be update"];
        }
    }
    //delete the data from the database ->response with id 
    function delete($id)
    {
        $device=Device::find($id);
        $result=$device->delete();
        if($result)
        {
            return ["result"=>"delete successfully"];
        }else{
            return ["Result"=>"sorry data not deleted"];
        }

    }
    //search the data in database
    function search($name){
        return Device::where("name",$name)->get();
    }
    //validate the data 
    function testdata(Request $request){
        $valide=$request->validate([
            'name'=>'required|string',
            'age'=>'required',
        ]);
        $data=[
            'staus'=>'successfully',
            'message'=>'validate is successfully',
            'data'=>$valide
        ];
        return response()->json($data);
        //return "hello everyone";
    }
}
