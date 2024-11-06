<?php

namespace App\Repositories;

use App\Models\Student;
use App\Repositories\Interfaces\StudentRepositoryInterface;

class StudentRepository implements StudentRepositoryInterface
{
    public function get()
    {
        return Student::get();
    }

    public function add($student)
    {
        Student::create($student);
    }

    public function edit($id)
    {
        return Student::findOrFail($id);
    }

    public function update($data, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($data);
    }

    public function destroy($id)
    {
        return Student::findOrFail($id)->delete();
    }
}
