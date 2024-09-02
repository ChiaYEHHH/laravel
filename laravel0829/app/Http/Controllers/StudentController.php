<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // foreach (Student::all() as $flight) {
        //     echo $flight->name;
        // }
        $data = Student::all();
        // dd($data);
        return view("student.index", ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('create OKK');
        return view("student.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd("store OKK");
        // $data = $request->all();
        // dd($data);

        $student = new Student();
        $student->name = $request->name;
        $student->mobile = $request->mobile;

        $student->save();
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd("edit OKK");
        // $id=$_GET['id'];
        $student = Student::findOrFail($id);
        return redirect()->route('students.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);
        $request->except("_token");
        $student->name = $request['name'];
        $student->mobile = $request['mobile'];
        $student->update();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}