<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; //Add this line too

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //load data from DB to display
        //$students = Student::get();
        //return view('student.index',['students' => $students->toarray()]);

        $data['students'] = Student::orderBy('id', 'asc')->paginate(5);
        return view('student.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'stuid' => 'required',
            'name' => 'required',
            'lastname' => 'required',
            'year' => 'required',
            'major_id' => 'required'
        ]);

        $student = new Student;
        $student->stuid = $request->stuid;
        $student->name = $request->name;
        $student->lastname = $request->lastname;
        $student->year = $request->year;
        $student->major_id = $request->major_id;
        $student->save();
        return redirect()->route('student.index')->with('success', 'Student has been inserted successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //get data from tabel by id
        //return show-view and display data
        //$student = Student::find($id);        
        //return view('student.show',['student' => $student->toarray()]);
        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //get data from tabel by id
        //return show-view and display data
        // selet * from student where id = $id       
        //return view('student.edit',['student' => $student->toarray()]);
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'stuid' => 'required',
            'name' => 'required',
            'lastname' => 'required',
            'year' => 'required',
            'major_id' => 'required'
        ]);

        $student = Student::find($id);
        $student->stuid = $request->stuid;
        $student->name = $request->name;
        $student->lastname = $request->lastname;
        $student->year = $request->year;
        $student->major_id = $request->major_id;
        $student->save();
        return redirect()->route('student.index')->with('success', 'Student has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index')->with('success', 'Student has been deleted successfully.');
    }
}
