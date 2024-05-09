<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class owner extends Model
{
    function owner(){
        return $this->hasOne(clent::class,'owners_id');
    }
    use HasFactory;
}
