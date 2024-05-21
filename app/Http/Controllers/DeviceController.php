<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Egulias\EmailValidator\Result\ValidEmail;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    //    function getlist($id){
    //     //return 'hi';
    //     return Device::find($id);
    //    }
    // opptional result
    function getlist($id = null)
    {
        // If an ID is provided, find and return the specific device by ID.
        // Otherwise, return all devices.
        return $id ? Device::find($id) : Device::all();
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
    function search($name){
        return Device::where("name",$name)->get();
    }
}
