<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Repositories\Interfaces\StudentRepositoryInterface;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $studentRepository;

    public function __construct(StudentRepositoryInterface $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function index()
    {
        $student = $this->studentRepository->get();

        return view('index', compact('student'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'father_name' => 'required',
            'dob' => 'required|date',
        ]);
        $student = $request->all();
        // Student::create($student);
        $this->studentRepository->add($student);

        return redirect()->route('index')->with('success', 'Student Added Successfully');
    }

    public function edit($id)
    {
        $student = $this->studentRepository->edit($id);

        return view('edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'father_name' => 'required',
            'dob' => 'required|date',
        ]);
        $data = $request->all();
        $student = $this->studentRepository->update($data, $id);

        return redirect()->route('index')->with('success', 'Student Detail Updated Successfully');
    }

    public function destroy($id)
    {
        $student = $this->studentRepository->destroy($id);

        return redirect()->route('index')->with('success', 'Student deleted successfully!');
    }
}
