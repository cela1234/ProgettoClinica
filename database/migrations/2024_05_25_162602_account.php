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
        Schema::create('account', function (Blueprint $table) {
            $table->id();
            $table->string('username', 45)->unique();
            $table->string('pwd',45);
            $table->string('nome',45);
            $table->string('cognome',45);
            $table->dateTime('dataDiNascita');
            $table->integer('tipoAccount');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account');
    }
};
