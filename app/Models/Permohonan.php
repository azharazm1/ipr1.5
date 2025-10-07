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
        'jenis_makanan',
        'ada_kenderaan',
        'jenis_kenderaan',
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
