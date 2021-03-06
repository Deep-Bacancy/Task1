<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        
        return view('student.index',compact('students'));
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
        // dd($request->all());
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'city' => 'required|string|max:255', 
            'photo' => 'required|mimes:jpeg,jpg,png,gif'
        ]);

        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->city = $request->city;

        $file = $request->file("photo");
        $filename = $file->getClientOriginalName();
        $file->move(public_path('studentPhoto'),$filename);
        $student->path = $filename;
          
        $student->save();
        return redirect(route('student.index'))->with('success','Data entered successfully!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('student.edit',[
            'student' => Student::findOrFail($id)
        ]);
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
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'city' => 'required|string|max:255', 
            'photo' => 'mimes:jpeg,jpg,png,gif'
        ]);

        $student = Student::findOrFail($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->city = $request->city;

        if($file = $request->file("photo"))
        {
            $filename = $file->getClientOriginalName();
            $file->move(public_path('product_photo'),$filename);
            $student->path = $filename;
        }

        $student->save();
        return redirect(route('student.index'))->with('update','Data Update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect(route('student.index'))->with('delete','Student Deleted successfully!');
    }
}
