<?php

use App\Models\IndustryType;
use Illuminate\Database\Seeder;

class IndustryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$types = ['Construction', 'Highways', 'Traffic Management', 'Aerospace & Defence', 'pharmaceutical', 'Food', 'Healthcare','Manufacturing','Other'];

        IndustryType::query()->truncate();
        foreach ($types as $type) {
	        IndustryType::insert(['name' => $type]);
    	}
    }
}
