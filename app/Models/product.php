<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table="products";
    protected $primarykey="id";
    protected $fillable=['name','price'];
    use HasFactory;
}
