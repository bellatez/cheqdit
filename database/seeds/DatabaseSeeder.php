<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(IndustryTypeSeeder::class);
        $this->call(CompanySizeSeeder::class);
        $this->call(LaratrustSeeder::class);
    }
}
