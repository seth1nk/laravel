<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voditeli extends Model
{
    use HasFactory;

    protected $table = 'voditeli'; // Указываем имя таблицы
    protected $primaryKey = 'id_vod'; // Указываем первичный ключ

    protected $fillable = [
        'name_vod',
        'stazh',
        'number_pass',
        'adress',
        'phone',
    ];
}