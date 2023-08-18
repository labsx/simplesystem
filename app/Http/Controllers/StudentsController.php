<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

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
     return back();
    }

    public function destroy(Students $student){
        // dd($student);
        $student->delete();
         return redirect('/index');
    }
   
}
