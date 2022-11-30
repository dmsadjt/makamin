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
        Schema::create('rekening_users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger('id_user');
            $table->string('nama_penyedia_layanan');
            $table->string('no_rekening');
            $table->string('atas_nama');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekening_users');
    }
};
