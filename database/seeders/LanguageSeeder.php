<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('languages')->insert([
            ['name' => 'Engleski'],
            ['name' => 'Njemački'],
            ['name' => 'Kineski'],
            ['name' => 'Hindi'],
            ['name' => 'Španski'],
            ['name' => 'Arapski'],
            ['name' => 'Francuski'],
            ['name' => 'Bengali'],
            ['name' => 'Ruski'],
            ['name' => 'Srpski'],
        ]);
    }
}
