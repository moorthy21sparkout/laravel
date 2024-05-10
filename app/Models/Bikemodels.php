<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Bikemodels extends Model
{
    function model(){
        return $this->belongsTo(Bikecompony::class,'bikecomponies_id');
    }
    use HasFactory;
}
