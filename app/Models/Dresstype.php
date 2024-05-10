<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dresstype extends Model
{
    // function category(){
    //     return $this->hasManyThrough(Dresscategory::class,'Dressestype_id');
    // }
    use HasFactory;
}
