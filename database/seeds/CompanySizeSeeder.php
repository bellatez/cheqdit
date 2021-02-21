<?php

use App\Models\CompanySize;
use Illuminate\Database\Seeder;

class CompanySizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sizes = ['0 - 50', '50- 100', '100 - 200', '200 - 500', '500+'];

        CompanySize::query()->truncate();
        foreach ($sizes as $size) {
	        CompanySize::insert(['size' => $size]);
    	}
    }
}
