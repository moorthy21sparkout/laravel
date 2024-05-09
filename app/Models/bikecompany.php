<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bikecompany extends Model
{
    use HasFactory;
    function company(){
        return $this->hasMany(bikemodel::class,'bikecompanies_id');
    }
}
