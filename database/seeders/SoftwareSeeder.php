<?php

namespace Database\Seeders;

use App\Models\Software;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Software::query()->insert([
            [
                'name' => 'Site 1',
                'description' => 'Descrição do Site 1',
                'image' => asset('storage/'),
                'url' => 'http://site1.com',
            ],
            [
                'name' => 'Site 2',
                'description' => 'Descrição do Site 2',
                'image' => 'caminho/para/imagem2.jpg',
                'url' => 'http://site2.com',
            ],
            [
                'name' => 'Site 3',
                'description' => 'Descrição do Site 3',
                'image' => 'caminho/para/imagem3.jpg',
                'url' => 'http://site3.com',
            ],
        ]);
    }
}
