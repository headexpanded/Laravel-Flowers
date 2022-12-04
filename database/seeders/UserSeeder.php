<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Sid Vicious',
                'email' => 'sid@sexpistols.uk',
                'password' => 'sid123ABC'

            ],
            [
                'name' => 'Johnny Rotten',
                'email' => 'johnny@sexpistols.uk',
                'password' => 'johnny123ABC'
            ],
            [
                'name' => 'Steve Cook',
                'email' => 'steve@sexpistols.uk',
                'password' => 'steve123ABC'
            ],
            [
                'name' => 'Paul Jones',
                'email' => 'paul@sexpistols.uk',
                'password' => 'paul123ABC'
            ]
        ]);
    }
}
