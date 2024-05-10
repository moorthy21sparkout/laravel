<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employ extends Model
{
    function role(){
        return $this->belongsToMany(Role::class,'employ_roles');
    }
    use HasFactory;
}
