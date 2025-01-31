<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CourseTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_can_create_course()
{
    $response = $this->postJson('/api/courses', [
        'title' => 'Test Course',
        'price' => 100,
        'start_date' => '2025-01-01',
        'end_date' => '2025-12-31',
        'instructor_name' => 'John Doe',
    ]);

    $response->assertStatus(201)
             ->assertJson(['message' => 'Course created successfully']);
}


    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
