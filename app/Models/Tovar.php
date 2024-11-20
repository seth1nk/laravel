<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tovar extends Model
{
    use HasFactory;

    protected $table = 'tovar'; // Указываем имя таблицы
    protected $primaryKey = 'id_tovar'; // Указываем первичный ключ

    protected $fillable = [
        'name_tovar',
        'kolvo_tovar',
        'cena_tovar',
    ];
}