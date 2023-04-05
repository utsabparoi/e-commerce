<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insertOrIgnore([
            'name'		=>'admin',
            // 'user_type'		=> 1,
            // 'status'		=> 1,
    		'email'		=>'admin@gmail.com',
    		'password'	=>Hash::make(12345678),
        ]);
    }
}
