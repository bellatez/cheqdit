<?php

namespace App\Models;

use App\Models\VehicleType;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
    	'reg',
    	'fleet_num',
    	'type',
    	'make',
    	'colour',
    	'condition',
    	'service_date',
    	'service_doc',
    	'mot_date',
    	'mot_doc',
    	'mileage',
    	'comments'
    ];

    public function type()
    {
    	return $this->belongsTo(VehicleType::class, 'type')->withDefault();
    }
}
