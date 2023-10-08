<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Book::create([
            'title' => 'abr',
            'author' => 'Author 1',
            'description' => 'Description of Book 1',
        ]);

        Book::create([
            'title' => 'adknekf',
            'author' => 'Author 2',
            'description' => 'Description of Book 2',
        ]);


    }
}
