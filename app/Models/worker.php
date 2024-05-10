<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class worker extends Model
{
    function workerinfo(){
        return $this->belongsTo(owner::class,'owners_id');
    }
    use HasFactory;
}
