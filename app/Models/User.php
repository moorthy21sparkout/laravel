<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authendication;

class User extends Authendication
{
    use HasFactory;

    protected $fillable=[
        'id',
        'name',
        'email',
        'password'
    ];
}
