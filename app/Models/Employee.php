<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table='employees';
    protected $fillable = ['company_id','employee_id','Name','Age','designation','address'];

   public   function project(){
    return $this->hasMany(Project::class,'employee_id','id');
   }
    use HasFactory;
}
