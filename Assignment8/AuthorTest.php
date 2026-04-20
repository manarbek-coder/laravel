<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Author;

class AuthorTest extends TestCase
{
    public function test_full_name_method()
    {
        $author = new Author([
            'name' => 'John',
            'surname' => 'Doe'
        ]);

        $this->assertEquals('John Doe', $author->fullName());
    }
}
