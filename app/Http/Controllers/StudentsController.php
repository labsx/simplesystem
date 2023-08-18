<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentsController extends Controller
{
    public function show($id){
        $data = Students::findOrFail($id);
        return view ('edit',['student' => $data]);
   }
   public function update(Request $request, Students $student){

     $validated = $request->validate([
         "first_name" => ['required', 'min:4'],
         "last_name" => ['required', 'min:4'],
         "age" => ['required'],
         "email" =>['required','email'] ,
         
     ]);
     $student->update($validated);
     return back()->with('message','Data successfully edited');
    }

    public function destroy(Students $student){
        // dd($student);
        $student->delete();
         return redirect('/index')->with('message','Data deleted successfully');
    }

    public function create (){
        return view ('addstudent');
    }

    public function store(Request $request){
        $validated = $request->validate([
            "first_name" => ['required', 'min:4'],
            "last_name" => ['required', 'min:4'],
            "gender" => ['required', 'min:4'],
            "age" => ['required'],
            "email" =>['required','email', Rule::unique('students', 'email')] ,
            
        ]);
     
        Students::create($validated);
        return redirect('/index')->with('message','Data added successfully');
         
    }
   
}
