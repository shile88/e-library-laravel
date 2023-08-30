<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Umjetnost i fotografija'],
            ['name' => 'Biogrfija'],
            ['name' => 'Dječije knjige'],
            ['name' => 'Zanat i hobiji'],
            ['name' => 'Krimi i triler'],
            ['name' => 'Hrana i piće'],
            ['name' => 'Grafički romani, Anime & Mange'],
            ['name' => 'Istorija i arheologija'],
            ['name' => 'Um, tijelo i duh'],
            ['name' => 'Naučna fantastika, fikcija i horor']
        ]);
    }
}
