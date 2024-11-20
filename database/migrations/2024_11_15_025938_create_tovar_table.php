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
        Schema::create('tovar', function (Blueprint $table) {
            $table->id('id_tovar'); // Используем id() для создания первичного ключа
            $table->string('name_tovar'); // notNull() в Yii соответствует nullable(false) в Laravel
            $table->integer('kolvo_tovar');
            $table->decimal('cena_tovar', 10, 2); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tovar');
    }
};
