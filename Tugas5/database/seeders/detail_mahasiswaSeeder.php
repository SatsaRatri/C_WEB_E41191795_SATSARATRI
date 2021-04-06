<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class detail_mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('detail_mahasiswa') -> insert([
            'NIM'=>"41191795",
            'Nama'=>"Satsa Ratri Hastutik",
            'Jenis_Kelamin'=>"Perempuan",
            'Alamat' =>"Jember",
            'No_Handphone' => "081339011430"

        ]);
    }
}
