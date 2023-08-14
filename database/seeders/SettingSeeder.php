<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            ['variable' => 'Holding time', 'value' => 20],
            ['variable' => 'Reservation time', 'value' => 20],
            ['variable' => 'Books per student', 'value' => 5],
        ]);
    }
}
