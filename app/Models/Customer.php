<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    
    protected $table = "customer";
    protected $fillable = [
        'nama_lengkap',
        'tgl_lahir_customer',
        'jenis_kelamin_customer',
        'email_customer',
        'password_customer',
        'no_telp_customer',
        'alamat_customer',
    ];
}
