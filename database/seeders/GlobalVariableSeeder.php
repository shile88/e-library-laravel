<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GlobalVariableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('global_variables')->insert([
            [
                'name' => 'Period for checkouts',
                'variable_name' => 'holding_time',
                'value' => 20,
                'unit' => 'day',
                'description' => 'This value defines the time in days, a book can be checked out for a student. After this period the checkout will be overdue.'
            ],
            [
                'name' => 'Period for reservations',
                'variable_name' => 'reservation_time',
                'value' => 20,
                'unit' => 'day',
                'description' => 'This value defines the time in days, a book can be reserved for a student. In this period a student can check out the book. After this period the reservation will be canceled.'
            ],
            [
                'name' => 'Books per student',
                'variable_name' => 'books_per_student',
                'value' => 5,
                'unit' => 'book',
                'description' => 'This value defines a number of books that can be checked out or reserved for a student.'
            ],
        ]);
    }
}
