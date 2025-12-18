<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // 학생 목록
    public function index()
    {
        $students = Student::all();

        return view('students.index', [
            'students' => $students,
        ]);
    }

    // 학생 상세
    public function show($id)
    {
        $student = Student::find($id);

        if (!$student) {
            abort(404);
        }

        return view('students.show', [
            'student' => $student,
        ]);
    }

    // 학생 추가 화면
    public function create()
    {
        return view('students.create');
    }

    // 학생 저장
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->grade = $request->grade;
        $student->save();

        return redirect('/students');
}
}
