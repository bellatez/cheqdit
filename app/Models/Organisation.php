<?php

namespace App\Models;

use App\Models\CompanySize;
use App\Models\IndustryType;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    protected $fillable = [
		'name',
		'address1',    	
		'address2',    	
		'address3',    	
		'postcode',    	
		'email',    	
		'telephone',    	
		'website',
		'industry_type',
		'company_size',
		'billing_email'   	
    ];

    public function industryType()
    {
    	return $this->belongsTo(IndustryType::class, 'industry_type');
    }

    public function companySize()
    {
    	return $this->belongsTo(CompanySize::class, 'company_size');
    }
}
