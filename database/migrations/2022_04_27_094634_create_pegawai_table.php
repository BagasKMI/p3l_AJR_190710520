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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_role')->constrained('role');
            $table->string('nama_pegawai');
            $table->string('alamat_pegawai');
            $table->date('tgl_lahir_pegawai');
            $table->string('jenis_kelamin_pegawai');
            $table->string('email_pegawai');
            $table->string('no_telp_pegawai');
            $table->string('password_pegawai');
            $table->string('foto_pegawai');
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
        Schema::dropIfExists('pegawai');
    }
};
