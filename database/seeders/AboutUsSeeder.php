<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_us')->insertOrIgnore([
            'title'		=>'The Big Store',
            'image'		=>'/frontend/images/ab.jpg',
    		'description'		=>'The Big store is not a online shopping mall. This is the way of your daily life to full fill your all productive need.'
        ]);


    }
}
