<?php

namespace Tests\Feature;

use App\Models\Student;
use Tests\TestCase;

class StudentTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    // public function test_example(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    public function test_homepage_contains_empty_table()
    {
        $student = Student::factory()->create();
        // $student = new Student();
        // $student->name = 'John Doe';  // Provide values for required fields
        // $student->father_name = 'John';
        // $student->dob = '2005-08-06';
        // $student->class = 'XI';
        // $student->stream = 'Medical';

        $student->save();
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee(__('No Record Found'));
    }

    public function test_homepage_contains_nonempty_table()
    {
        $student = Student::factory()->create();
        // $student = new Student();
        // $student->name = 'John Doe';  // Provide values for required fields
        // $student->father_name = 'John';
        // $student->dob = '2005-08-06';
        // $student->class = 'XI';
        // $student->stream = 'Medical';

        $student->save();
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertDontSee(__('No Record Found'));
        $response->assertSee($student['name']);
        $response->assertViewHas('student', function ($collection) use ($student) {
            return $collection->contains($student);
        });
    }
}
