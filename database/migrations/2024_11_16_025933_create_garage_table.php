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
        Schema::create('garage', function (Blueprint $table) {
            $table->bigInteger('id_avto')->primary(); // Создаем первичный ключ
            $table->string('polomka');
            $table->string('zapchast');
            $table->decimal('cena_zapchast', 10, 2);
            $table->date('data_nachalo');
            $table->date('data_konec');
            $table->timestamps();
            $table->foreign('id_avto')
                  ->references('id_avto')
                  ->on('avtos')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('garage', function (Blueprint $table) {
            $table->dropForeign(['id_avto']); // Удаляем внешний ключ
        });

        Schema::dropIfExists('garage');
    }
};
