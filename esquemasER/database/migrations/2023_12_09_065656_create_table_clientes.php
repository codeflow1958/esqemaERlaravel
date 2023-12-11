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
        Schema::create('table_clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_cliente');
            $table->string('dir_cliente');
            $table->string('correo_cliente');
            $table->string('rif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_clientes');
    }
};
