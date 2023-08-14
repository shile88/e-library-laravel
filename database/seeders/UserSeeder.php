<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin ',
                'email' => 'admin@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password'),
                'role_id' => 1,
                'jmbg' => '1',
                'picture' => '/assets/img/user.jpg'
            ],
            [
                'name' => 'Librarian',
                'email' => 'librarian@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password'),
                'role_id' => 2,
                'jmbg' => '2',
                'picture' => '/assets/img/user.jpg'
            ],
            [
                'name' => 'Customer',
                'email' => 'customer@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password'),
                'role_id' => 3,
                'jmbg' => '3',
                'picture' => '/assets/img/user.jpg'
            ]
        ]);
    }
}
