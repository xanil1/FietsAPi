<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('fietsen', function (Blueprint $table) {
            $table->id();
            $table->string('merk'); // merk van de fiets
            $table->foreignId('kleur_id')->constrained('kleuren'); // foreign key naar de kleuren-tabel
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fietsen');
    }
};
