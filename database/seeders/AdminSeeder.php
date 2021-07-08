<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admins')->delete();

        \DB::table('admins')->insert([
            'id'=>1,
            'username'=>'UnnudNoFukkatsu',
            'password'=>bcrypt('rahasia'),
            'created_at'=>\Carbon\Carbon::now('Asia/Ujung_Pandang')
        ]);
    }
}
