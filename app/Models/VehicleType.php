<?php

namespace App\Models;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    protected $fillable = [
    	'name'
    ];

    public function vehicles()
    {
    	return $this->hasMany(Vehicle::class, 'type');
    }
}
