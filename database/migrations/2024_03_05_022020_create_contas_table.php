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
        Schema::create('contas', function (Blueprint $table) {
            $table->id();
            $table->integer('quantPessoas')->default(1);
            $table->double('valorTotal', 8, 2)->default(0);
            $table->double('valorRestante', 8, 2)->default(0); 
            $table->unsignedBigInteger('cliente_id')->nullable(false)->unsigened();
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contas');
    }
};