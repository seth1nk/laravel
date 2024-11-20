<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marh extends Model
{
    use HasFactory;

    protected $table = 'marh'; // Указываем имя таблицы
    protected $primaryKey = 'id_marh'; // Указываем первичный ключ

    protected $fillable = [
        'mesto',
        'rasstoyanie',
    ];
}