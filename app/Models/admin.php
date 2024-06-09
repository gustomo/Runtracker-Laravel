<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admins';

    protected $fillable = [
        'nama',
        'email',
        'kategori_olahraga',
        'no_tlp',
        'lokasi_saat_ini',
        'kondisi_fisik',
    ];
}
