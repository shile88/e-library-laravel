<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BindingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bindings')->insert([
            ['name' => 'Meki povez'],
            ['name' => 'Tvrdi povez'],
            ['name' => 'Plastična spirala'],
            ['name' => 'Klamovani'],
        ]);
    }
}
