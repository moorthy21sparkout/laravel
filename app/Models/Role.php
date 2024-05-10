<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function employ(){
        return $this->belongsToMany(Employ::class,Employ_Role::class);
    }
    use HasFactory;
}
