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
        Schema::create("messaggio", function (Blueprint $table) {
            $table->id();
            $table->string('oggetto',200);
            $table->text('corpo');
            $table->unsignedBigInteger('idAccountMittente');
            $table->unsignedBigInteger('idAccountDestinatario');
            $table->foreign('idAccountMittente')->references('id')->on('account');
            $table->foreign('idAccountDestinatario')->references('id')->on('account');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messaggio');
    }
};
