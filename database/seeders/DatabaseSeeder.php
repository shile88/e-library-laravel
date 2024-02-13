<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AuthorSeeder::class,
            BindingSeeder::class,
            CategorySeeder::class,
            GenreSeeder::class,
            PublisherSeeder::class,
            ScriptSeeder::class,
            SizeSeeder::class,
            LanguageSeeder::class,
            GlobalVariableSeeder::class,
            RoleSeeder::class,

            BookSeeder::class,
            UserSeeder::class,
            AuthorBookSeeder::class,
            BookCategorySeeder::class,
            BookGenreSeeder::class,
            ImageSeeder::class,
        ]);
    }
}
