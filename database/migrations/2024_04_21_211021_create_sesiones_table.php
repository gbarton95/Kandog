<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('sesiones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->unsignedBigInteger('perro_id');
                $table->foreign('perro_id')
                ->references('id')
                ->on('perros') 
                ->onDelete('cascade');
            $table->string('asunto');
            $table->string('ubicacion');
            $table->datetime('inicio');
            $table->integer('duracion')->default(45);
            $table->boolean('done')->default(false);
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sesiones');
    }
};
