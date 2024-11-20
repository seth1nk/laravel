<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispet extends Model
{
    use HasFactory;

    protected $fillable = [
        'time_prib',
        'time_otb',
        'id_vod',
        'pytevka',
        'tovar',
    ];

    protected $primaryKey = 'id_avto';
    public $incrementing = true;
    protected $keyType = 'integer';
}