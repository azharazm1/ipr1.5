<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Daerah extends Model
{
    protected $table = 'daerahs';

    protected $fillable = [
        'negeri',
        'daerah',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
