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
            [
                'task' => 'Buy Car',
                'completed' => false,
            ],
            [
                'task' => 'Go to see the doctor',
                'completed' => false,
            ],
            [
                'task' => 'Watch movie',
                'completed' => false,
            ],
        ]);
    }
}
