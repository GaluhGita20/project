<?php

namespace Database\Seeders;

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
        $this->call(FakultasSeeder::class);
        $this->call(UkmSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
