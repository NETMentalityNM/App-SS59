<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();  // Kalau ingin membuat relasi, maka tipenya adalah bigInteger
            $table->integer('no_kartu')->unique();
            $table->integer('nik_pas');
            $table->string('nim_pas');
            $table->string('nm_pas');
            $table->integer('umur_pas');
            $table->integer('hp_pas');
            $table->string('alamat_pas');
            $table->string('status_pas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasiens');
    }
};
