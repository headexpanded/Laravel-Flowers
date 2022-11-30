<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FlowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flowers')->insert([
            [
                'name' => 'Wild Daisy',
                'price' => 29.95
            ],
            [
                'name' => 'Climbing Rose',
                'price' => 64.95
            ],
            [
                'name' => 'Blue Daisy',
                'price' => 9.95
            ]
        ]);
    }
}
