<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'aset_kendaraan';
    protected $fillable = [
        'nama_mobil',
        'tipe_mobil',
        'jenis_transmisi',
        'jenis_bahan_bakar',
        'volume_bahan_bakar',
        'warna_mobil',
        'kapasitas_mobil',
        'fasilitas_mobil',
        'plat_nomor','nomor_stnk',
        'kategori_aset','tgl_service_terakhir',
        'status_ketersediaan_mobil','biaya_sewa'
    ];
}
