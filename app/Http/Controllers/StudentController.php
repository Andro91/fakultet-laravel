<?php

namespace App\Http\Controllers;

use App\Smer;
use App\Student;
use Illuminate\Http\Request;

use App\Http\Requests;

class StudentController extends Controller
{
    public function show()
    {
        $studentNiz = Student::all();
//        $s = Student::find(1);
//        return $s->smer;
        return view('student.show')->with("studentNiz", $studentNiz);
    }

    public function create()
    {
        $smerovi = Smer::all();
        return view('student.create')->with('smerovi',$smerovi);
    }

    public function store(Request $request)
    {
        //dd($request->all());
        //$student = new Student($request->all());
        $student = new Student;
        $student->ime = $request->ime;
        $student->prezime = $request->prezime;
        $student->brojindeksa = $request->brindeksa;
        $student->jmbg = $request->jmbg;
        $student->smers_id = $request->smers_id;
        $student->save();

        $studentNiz = Student::all();
        return redirect("student")->with("studentNiz", $studentNiz);

    }

    public function delete(Student $student)
    {
        return view('student.delete')->with("student", $student);
    }

    public function remove(Student $student)
    {
        $student->delete();

        return redirect("/student");
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit')->with("student", $student);
    }

    public function update(Student $student)
    {
        $student->update(request()->all());
        return redirect("/student");
    }
}
