<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAktifToPelanggans extends Migration
{
   
    public function up()
    {
        Schema::table('pelanggans', function (Blueprint $table) {
            $table->integer('aktif');
        });
    }


    public function down()
    {
        Schema::table('pelanggans', function (Blueprint $table) {
            Schema::dropIfExists('pelanggans');
        });
    }
}
