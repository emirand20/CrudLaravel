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
        Schema::create('pol', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50)->unique();
            $table->text('velocidad');
            $table->float('posicion', 7,2)->unsigned();
            $table->float('fisico', 7,2)->unsigned();
            $table->enum('ritmo', ['S', 'N']);
            $table->integer('regate')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pol');
    }
};
