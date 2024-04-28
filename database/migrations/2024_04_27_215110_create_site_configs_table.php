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
        Schema::create('site_configs', function (Blueprint $table) {
            $table->id();
            $table->string('contact_name')->nullable(); // Nome do contato
            $table->string('contact_email')->nullable(); // E-mail do contato
            $table->text('description')->nullable(); // Descrição do site
            $table->string('address')->nullable(); // Endereço do site
            $table->string('phone')->nullable(); // Telefone do contato
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_configs');
    }
};
