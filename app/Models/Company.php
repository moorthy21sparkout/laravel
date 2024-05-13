<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table='companies';
    protected $fillable=['Name',	'Contact_number',	'secondary_contact_number',	'Email_address',	'GST_number',	'Address',
    	'status' ];
        public function employee(){
            return $this->hasOne(Employee::class,'company_id','id');
        }
    use HasFactory;
}
