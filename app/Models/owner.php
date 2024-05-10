<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class owner extends Model
{
    function ownerinfo(){
        return $this->hasOne(worker::class,'owners_id');
    }
    use HasFactory;
}
