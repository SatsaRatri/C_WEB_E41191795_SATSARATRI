<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_profile')->insert([
            'address' => "Jember",
            'no_handphone' => "0813xxxxxxx",
            'ttl' => "2001-07-06",
            'foto' => "image"

        ]);
    }
}
