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
        Schema::create('dispets', function (Blueprint $table) {
            $table->id('id_avto'); // Создаем первичный ключ
            $table->dateTime('time_prib');
            $table->dateTime('time_otb');
            $table->integer('id_vod');
            $table->integer('pytevka');
            $table->integer('tovar');
            $table->timestamps();

            // Добавляем внешние ключи
            $table->foreign('id_avto')
                  ->references('id_avto')
                  ->on('avtos')
                  ->onDelete('cascade');

            $table->foreign('id_vod')
                  ->references('id_vod')
                  ->on('voditeli')
                  ->onDelete('cascade');

            $table->foreign('tovar')
                  ->references('id_tovar')
                  ->on('tovar')
                  ->onDelete('cascade');

            $table->foreign('pytevka')
                  ->references('id_marh')
                  ->on('marh')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
            Schema::table('dispets', function (Blueprint $table) {
                $table->dropForeign(['id_avto']); // Удаляем внешний ключ
                $table->dropForeign(['id_vod']); // Удаляем внешний ключ
                $table->dropForeign(['tovar']); // Удаляем внешний ключ
                $table->dropForeign(['pytevka']); // Удаляем внешний ключ
            });
        Schema::dropIfExists('dispets');
    }
};
