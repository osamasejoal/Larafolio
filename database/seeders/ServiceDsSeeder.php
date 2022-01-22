<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ServiceDsSeeder extends Seeder
{


    //================================
    // Seeder for Services Description
    //================================
    public function run()
    {
        DB::table('service_descs')->insert([
            'short_desc' => 'Our Services Range From Initial Design To Deployment Anywhere Anytime',
            'long_desc' => 'Lorem ipsum dolor sit amet consectetur architecto magni, dicta maxime laborum temporibus dolorem esse doloremque illo quas nisi enim molestias. Tempore ducimus molestiae in dolore enim.',
        ]);
    }
}
