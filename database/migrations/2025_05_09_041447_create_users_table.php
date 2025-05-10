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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Auto-incremental ID
            $table->string('name'); // Nombre del usuario
            $table->string('email')->unique(); // Correo electrónico único
            $table->timestamp('email_verified_at')->nullable(); // Verificación del correo
            $table->string('password'); // Contraseña cifrada
            $table->rememberToken(); // Token de "recordarme"
            $table->timestamps(); // Marca de tiempo de creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
