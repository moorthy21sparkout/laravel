<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    function type(){
        return $this->hasManyThrough(Dresstype::class,Dresstype::class);
    }
    use HasFactory;
}
