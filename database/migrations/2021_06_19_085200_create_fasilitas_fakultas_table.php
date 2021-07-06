<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasilitasFakultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitas_fakultas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_fakultas')->nullable()->constrained('fakultas')->onDelete('cascade')->onUpdate('cascade');
            $table->string('fasilitas', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fasilitas_fakultas');
    }
}
