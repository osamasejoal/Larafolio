<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            'your_name' => "Hey!, I'm Osama",
            'your_bio' => "I'm a Laravel developer, I can web design also. If you want to Hire me, please get in touch.",
            'your_img' => 'your_default.png',
        ]);
    }
}
