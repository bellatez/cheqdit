<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InspectionFault extends Model
{
    protected $fillable = [
    	'inspection_id',
    	'fault_id'
    ];
}
