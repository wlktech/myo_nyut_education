<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::latest()->get();
        return view("backend.students.index", compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        $request->validated();

        $image = $request->file('image');
        $ext = $image->getClientOriginalExtension();
        $filename = uniqid('students') . '.' . $ext;
        $image->move(public_path('assets/img/students/'), $filename);

        Student::create([
            "name" => $request->name, 
            "image" => $filename, 
            "grade" => $request->grade, 
            "prize" => $request->prize, 
            "year" => $request->year
        ]);
        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        if(!$student){
            return redirect()->route('students.index')->with('error', 'Student not found.');
        }
        return view('backend.students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        if(!$student){
            return redirect()->route('students.index')->with('error', 'Student not found.');
        }
        return view('backend.students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, string $id)
    {
        $student = Student::find($id);
        if(!$student){
            return redirect()->route('students.index')->with('error', 'Student not found.');
        }
        $request->validated();

        if($request->file('image')){
            File::delete(public_path('assets/img/students/') . $student->image);

            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $filename = uniqid('students') . '.' . $ext;
            $image->move(public_path('assets/img/students/'), $filename);
        }else{
            $filename = $student->image;
        }
        $student->update([
            "name" => $request->name,
            "image" => $filename,
            "grade" => $request->grade,
            "prize" => $request->prize,
            "year" => $request->year,
        ]);
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        if(!$student){
            return redirect()->route('students.index')->with('error', 'Student not found.');
        }
        File::delete(public_path('assets/img/students/') . $student->image);
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
