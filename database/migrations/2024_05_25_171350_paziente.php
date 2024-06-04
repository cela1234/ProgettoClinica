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
        Schema::create("paziente", function (Blueprint $table) {
            $table->unsignedBigInteger('idAccount')->primary();
            $table->string('genere',45);
            $table->string('indirizzo',100);
            $table->string('telefono',45);
            $table->string('email',45);
            $table->unsignedBigInteger('idClinico');
            $table->foreign('idAccount')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idClinico')->references('idAccount')->on('clinico')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paziente');
    }
};
