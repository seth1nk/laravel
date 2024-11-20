<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('voditeli', function (Blueprint $table) {
            $table->id('id_vod'); // Используем id() для создания первичного ключа
            $table->string('name_vod'); // notNull() в Yii соответствует nullable(false) в Laravel
            $table->integer('stazh');
            $table->string('number_pass');
            $table->string('adress');
            $table->string('phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voditeli');
    }
};
