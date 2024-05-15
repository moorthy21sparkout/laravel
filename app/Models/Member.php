<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    // public function getnameAttribute($value){
    //     return ucfirst($value);
    // }
    // public function getAddressAttribute($value){
    //     return $value.',world ';
    
    public $timestemps=false;
    public function setnameAttribute($value){
        $this->attributes['name']='Mr'.$value;

    }
    public function setemailAttribute($value){
        $this->attributes['email']='your'.$value;

    }
    public function setaddressAttribute($value){
        $this->attributes['address']=$value .'india';

    }
  
  
}
