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
            ['name' => 'Umjetnost i fotografija', 'icon' => 'fas fa-palette', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit'],
            ['name' => 'Biografija', 'icon' => 'fas fa-address-book', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit'],
            ['name' => 'Dječije knjige', 'icon' => 'fas fa-children', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit'],
            ['name' => 'Zanat i hobiji', 'icon' => 'fas fa-screwdriver-wrench', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit'],
            ['name' => 'Krimi i triler', 'icon' => 'fas fa-gun', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit'],
            ['name' => 'Hrana i piće', 'icon' => 'fas fa-burger', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit'],
            ['name' => 'Grafički romani, Anime & Mange', 'icon' => 'fas fa-tv', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit'],
            ['name' => 'Istorija i arheologija', 'icon' => 'fas fa-calendar-day', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit'],
            ['name' => 'Um, tijelo i duh', 'icon' => 'fas fa-brain', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit'],
            ['name' => 'Naučna fantastika, fikcija i horor', 'icon' => 'fas fa-rocket', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit']
        ]);
    }
}
