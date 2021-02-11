<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MechanicFaults extends Model
{
    protected $fillable = [
    	'user_id',
    	'fault_id'
    ];
}
