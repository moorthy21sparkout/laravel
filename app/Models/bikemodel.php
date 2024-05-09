<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bikemodel extends Model
{
    function model(){
        return $this->belongsTo(bikecompany::class,'bikecompanies_id');
    }
    use HasFactory;
}
