<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table="projects";
    protected $fillable=['title	','description','start_date','number_of_member','status'];

    use HasFactory;
}