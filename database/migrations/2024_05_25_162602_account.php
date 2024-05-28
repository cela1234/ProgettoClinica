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
            $table->string('pwd');
            $table->string('nome');
            $table->string('cognome');
            $table->date('dataDiNascita');
            $table->integer('tipoAccount'); // 1 = paziente, 2 = clinico, 3 = admin; cosi segue la logica dei livelli
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
