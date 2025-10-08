<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permohonan extends Model
{
    use HasFactory;

    protected $table = 'permohonans';

    protected $fillable = [
        'jenis_program',
        'pengalaman_makanan',
        'tifoid',
        'tarikh_tifoid',
        'tarikh_luput',
        'kursus_pengendali',
        'tarikh_kursus',
        'jenis_makanan',
        'ada_kenderaan',
        'jenis_kenderaan',
        'tempat_vending',
        'nama',
        'no_kp',
        'jantina',
        'bangsa',
        'bangsa_lain',
        'negeri',
        'daerah',
        'poskod',
        'alamat',
        'telefon',
        'email',
        'pendapatan',
        'str',
    ];

    protected $casts = [
        'pendapatan' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
