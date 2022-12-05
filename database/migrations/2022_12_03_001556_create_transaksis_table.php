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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger('user_id');
            $table->bigInteger('makam_id');
            $table->date('tanggal_pemesanan');
            $table->integer('jumlah_makam');
            $table->double('total_pembelian')->default(150000);
            $table->string('status')->default('diproses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
};
