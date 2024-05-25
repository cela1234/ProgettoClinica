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
        Schema::create("terapiePrescritte", function (Blueprint $table) {
            $table->unsignedBigInteger("idAccountPaziente");
            $table->unsignedBigInteger("idTerapia");
            $table->boolean("Nuovo");
            $table->primary(["idAccountPaziente","idTerapia"]);
            $table->foreign("idAccountPaziente")->references("idAccount")->on("Paziente");
            $table->foreign("idTerapia")->references("id")->on("listaTerapieRiabilitative");
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terapiePrescritte');
    }
};
