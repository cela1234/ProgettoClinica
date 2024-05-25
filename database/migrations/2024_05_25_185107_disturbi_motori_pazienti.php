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
        Schema::create("disturbiMotoriPazienti", function (Blueprint $table) {
            $table->unsignedBigInteger("idAccountPaziente");
            $table->unsignedBigInteger("idDisturbo");
            $table->primary(["idAccountPaziente","idDisturbo"]);
            $table->foreign("idAccountPaziente")->references("idAccount")->on("Paziente");
            $table->foreign("idDisturbo")->references("id")->on("listaDisturbiMotori");
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disturbiMotoriPazienti');
    }
};
