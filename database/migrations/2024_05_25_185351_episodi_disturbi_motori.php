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
        Schema::create("EpisodiDisturbiMotori", function (Blueprint $table) {
            $table->unsignedBigInteger("idAccountPaziente");
            $table->unsignedBigInteger("idDisturbo");
            $table->dateTime("DataOra");
            $table->int("durata");
            $table->int("intensità");
            $table->primary(["idAccountPaziente","idDisturbo","DataOra"]);
            $table->foreign("idAccountPaziente")->references("idAccount")->on("Paziente");
            $table->foreign("idDisturbo")->references("idDisturbo")->on("DisturbiMotoriPaziente");
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('EpisodiDisturbiMotori');
    }
};
