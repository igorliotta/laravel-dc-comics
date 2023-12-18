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
        // Inserisco i campi della tabella richiesti in base al tipo di dato fornito
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable;
            $table->text('thumb');
            $table->float('price');
            $table->string('series');
            $table->date('sale_date');
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
