<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Apps\Models\Aluno;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Aluno::factory()->count(5)->create();
    }
}
