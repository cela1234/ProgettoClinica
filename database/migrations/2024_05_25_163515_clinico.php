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
        Schema::create("clinico", function (Blueprint $table) {
            $table->unsignedBigInteger("idAccount")->primary();
            $table->string("specializzazione");
            $table->string("ruolo",45);
            $table->foreign('idAccount')->references('id')->on('account')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinico');
    }
};
