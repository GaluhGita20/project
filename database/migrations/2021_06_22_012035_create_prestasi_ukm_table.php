<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestasiUkmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasi_ukm', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_ukm')->constrained('ukm')->onDelete('cascade')->onUpdate('cascade');
            $table->string('juara', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestasi_ukm');
    }
}
