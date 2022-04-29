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
        Schema::create('aset_kendaraan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_mitra')->nullable()->constrained('mitra');
            $table->string('nama_mobil');
            $table->string('tipe_mobil');
            $table->string('jenis_transmisi');
            $table->string('jenis_bahan_bakar');
            $table->float('volume_bahan_bakar');
            $table->string('warna_mobil');
            $table->integer('kapasitas_mobil');
            $table->string('fasilitas_mobil');
            $table->string('plat_nomor');
            $table->string('nomor_stnk');
            $table->string('kategori_aset');
            $table->date('tgl_service_terakhir');
            $table->string('status_ketersediaan_mobil');
            $table->float('biaya_sewa');
            $table->date('mulai_kontrak');
            $table->date('akhir_kontrak');
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
        Schema::dropIfExists('aset_kendaraan');
    }
};
