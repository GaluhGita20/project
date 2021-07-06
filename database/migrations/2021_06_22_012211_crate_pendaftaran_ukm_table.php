<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CratePendaftaranUkmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_ukm', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_fakultas')->constrained('fakultas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_prodi')->constrained('prodi')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_ukm')->constrained('ukm')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama', 255);
            $table->integer('nim');
            $table->string('id_line', 50);
            $table->string('telepon', 13);
            $table->string('email', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
