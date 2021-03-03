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
    	'address1',
        'address2',
        'address3',
    	'postcode'
    ];

    protected $with = ['user'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
