<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clent extends Model
{
    function clint(){
        return $this->belongsTo(owner::class,'owners_id');
    }
    use HasFactory;
}
