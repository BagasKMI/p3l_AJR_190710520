<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promo extends Model
{
    use HasFactory;
    
    protected $table = "promo";
    protected $fillable = [
        'kode_promo',
        'jenis_promo',
        'diskon',
        'keterangan',
        'status_promo',
    ];
}
