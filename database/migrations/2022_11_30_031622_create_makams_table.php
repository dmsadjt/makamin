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
        Schema::create('makams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('nama');
            $table->string('alamat');
            $table->string('agama')->default('umum');
            $table->bigInteger('harga')->default('3000000');
            $table->integer('tempat_tersedia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('makams');
    }
};
