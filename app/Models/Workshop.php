<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    protected $fillable = [
    	'user_id',
    	'website',
    	'name',
    	'address',
    	'postcode'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
