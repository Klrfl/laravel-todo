<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('todos')->insert([
            'label' => 'apa kek',
            'is_done' => 0,
        ]);

        DB::table('todos')->insert([
            'label' => 'apa lagi kek serah gua laper bgt nih',
            'is_done' => 1,
        ]);
    }
}
