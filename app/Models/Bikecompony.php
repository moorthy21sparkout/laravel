<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bikecompony extends Model
{
    function company(){
        return $this->hasMany(Bikemodels::class,'bikecomponies_id');
    }
    use HasFactory;
}
