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
        Schema::create('avtos', function (Blueprint $table) {
            $table->bigIncrements('id_avto')->primary(); // Используем id() для создания первичного ключа
            $table->string('registration_number'); // notNull() в Yii соответствует nullable(false) в Laravel
            $table->string('name_avto');
            $table->integer('god');
            $table->integer('probeg');
            $table->string('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avtos');
    }
};
