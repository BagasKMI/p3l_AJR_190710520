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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_customer')->nullable()->constrained('customer');
            $table->foreignId('id_pegawai')->nullable()->constrained('pegawai');
            $table->foreignId('id_aset')->nullable()->constrained('aset_kendaraan');
            $table->foreignId('id_driver')->nullable()->constrained('driver');
            $table->string('no_ktp');
            $table->string('no_sim');
            $table->date('tanggal_transaksi');
            $table->date('tanggal_mulai_sewa');
            $table->date('tanggal_akhir_sewa');
            $table->string('metode_pembayaran');
            $table->float('ekstensi_biaya');
            $table->float('total_biaya_sewa');
            $table->string('status_transaksi');
            $table->string('status_verifikasi');
            $table->integer('rating_driver');
            $table->string('kode_promo');
            $table->string('jenis_transaksi');
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
        Schema::dropIfExists('transaksi');
    }
};
