<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $book = new Book();
            $book->title = fake()->words(rand(1, 8), true);
            $book->author = fake()->name();
            $book->genre = fake()->optional()->word();
            $book->year = fake()->optional()->year();
            $book->save();
        }
    }
}
