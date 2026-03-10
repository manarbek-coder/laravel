<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            [
                'name' => 'J.K. Rowling',
                'email' => 'jk.rowling@example.com',
                'books' => [
                    ['title' => 'Harry Potter and the Philosopher\'s Stone', 'description' => 'The first book in the Harry Potter series'],
                    ['title' => 'Harry Potter and the Chamber of Secrets', 'description' => 'The second book in the Harry Potter series'],
                    ['title' => 'Harry Potter and the Prisoner of Azkaban', 'description' => 'The third book in the Harry Potter series'],
                ]
            ],
            [
                'name' => 'George R.R. Martin',
                'email' => 'gr.martin@example.com',
                'books' => [
                    ['title' => 'A Game of Thrones', 'description' => 'The first book in A Song of Ice and Fire series'],
                    ['title' => 'A Clash of Kings', 'description' => 'The second book in A Song of Ice and Fire series'],
                    ['title' => 'A Storm of Swords', 'description' => 'The third book in A Song of Ice and Fire series'],
                ]
            ],
            [
                'name' => 'J.R.R. Tolkien',
                'email' => 'jrr.tolkien@example.com',
                'books' => [
                    ['title' => 'The Fellowship of the Ring', 'description' => 'The first volume of The Lord of the Rings'],
                    ['title' => 'The Two Towers', 'description' => 'The second volume of The Lord of the Rings'],
                    ['title' => 'The Return of the King', 'description' => 'The third volume of The Lord of the Rings'],
                ]
            ]
        ];

        foreach ($authors as $authorData) {
            $author = Author::create([
                'name' => $authorData['name'],
                'email' => $authorData['email'],
            ]);

            foreach ($authorData['books'] as $bookData) {
                Book::create([
                    'title' => $bookData['title'],
                    'description' => $bookData['description'],
                    'author_id' => $author->id,
                ]);
            }
        }
    }
}