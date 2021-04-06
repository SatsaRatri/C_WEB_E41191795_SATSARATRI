<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_mahasiswa', function (Blueprint $table) {
            $table->string('NIM', 8);
            $table->string('Nama', 20);
            $table->string('Jenis_Kelamin', 10);
            $table->string('Alamat', 20);
            $table->string('No_Handphone', 15);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_profile');
    }
}
