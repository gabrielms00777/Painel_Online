<?php

namespace Database\Seeders;

use App\Models\SiteConfig;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin',
            'password' => 'admin',
        ]);

        SiteConfig::create([
            'contact_name' => 'Gabriel',
            'contact_email' => 'admin@admin',
            'description' => 'Somos uma empresa de desenvolvimento de software dedicada a criar soluções inovadoras. Oferecemos desenvolvimento sob demanda, automação de processos e sites personalizados.',
            'address' => '123 Rua Principal, Bairro Centro, Cidade',
            'phone' => '(+71) 9876543210',

            'og_title' => 'Empresa de Desenvolvimento de Software - Inovação e Qualidade',
            'og_description' => 'Soluções tecnológicas sob medida para o seu negócio. Desenvolvemos software, sistemas e sites personalizados para atender às suas necessidades.',
            'og_image' => 'https://example.com/imagem-de-destaque.png', // URL da imagem
            'og_url' => 'https://example.com', // URL do site
            'og_type' => 'website', // Tipo de conteúdo
        ]);
    }
}
