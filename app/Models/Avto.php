<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avto extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_number',
        'name_avto',
        'god',
        'probeg',
        'category',
    ];

    protected $primaryKey = 'id_avto';
    public $incrementing = true;
    protected $keyType = 'integer';
}