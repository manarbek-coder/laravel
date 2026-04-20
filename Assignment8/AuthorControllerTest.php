<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Author;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthorControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_author_can_be_created()
    {
        $response = $this->post('/authors', [
            'name' => 'Jane',
            'surname' => 'Smith',
            'birthdate' => '1990-01-01'
        ]);

        $response->assertStatus(302);

        $this->assertDatabaseHas('authors', [
            'name' => 'Jane',
            'surname' => 'Smith'
        ]);
    }
}
