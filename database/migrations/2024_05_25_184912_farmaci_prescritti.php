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
        Schema::create("farmaciPrescritti", function (Blueprint $table) {
            $table->unsignedBigInteger("idAccountPaziente");
            $table->unsignedBigInteger("idFarmaco");
            $table->boolean("Nuovo");
            $table->primary(["idAccountPaziente","idFarmaco"]);
            $table->foreign("idAccountPaziente")->references("idAccount")->on("Paziente");
            $table->foreign("idFarmaco")->references("id")->on("listaFarmaci");
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmaciPrescritti');
    }
};
