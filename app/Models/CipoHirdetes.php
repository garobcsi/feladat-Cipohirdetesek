<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CipoHirdetes extends Model
{
    protected $table = 'cipohirdetesek';
    protected $primaryKey = 'azon';
    public $timestamps = false;
    protected $casts = [
        'lejarat' => 'datetime',
        'aktiv' => 'boolean',
    ];
}
