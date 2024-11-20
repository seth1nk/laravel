<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{
    use HasFactory;

    protected $table = 'garage'; // Указываем имя таблицы
    protected $primaryKey = 'id_avto'; // Указываем первичный ключ

    protected $fillable = [
        'id_avto',
        'polomka',
        'zapchast',
        'cena_zapchast',
        'data_nachalo',
        'data_konec',
    ];

    public $timestamps = false; // Отключаем поля created_at и updated_at
}