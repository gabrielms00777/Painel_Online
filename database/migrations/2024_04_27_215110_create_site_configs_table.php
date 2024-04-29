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

            $table->string('facebook')->nullable(); // URL do Facebook
            $table->string('instagram')->nullable(); // URL do Instagram
            $table->string('twitter')->nullable(); // URL do Twitter
            $table->string('linkedin')->nullable();

            $table->string('og_title')->nullable(); // Título para Open Graph
            $table->string('og_description')->nullable(); // Descrição para Open Graph
            $table->string('og_image')->nullable(); // URL da imagem para Open Graph
            $table->string('og_url')->nullable(); // URL do site para Open Graph
            $table->string('og_type')->nullable();
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
