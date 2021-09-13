<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinations')->insert([
            'name' => 'Lao Cai',
            'image' => '',
            'slug' => 'lao-cai',
            'address' => 'Lao Cai District'
        ]);
        DB::table('destinations')->insert([
            'name' => 'Da Nang',
            'image' => '',
            'slug' => 'da-nang',
            'address' => 'Da Nang City'
        ]);
    }
}
