<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function register (){
    return view ('register');
    }

    public function store(Request $request){
       
        $validated = $request->validate([
            "first_name" => ['required', 'min:3'],
            "last_name" => ['required', 'min:3'],
            "email" =>['required','email', Rule::unique('users', 'email')] ,
            "password" => ['required', 'min:4', 'max: 50'],
        ]);
        $valdiate['password']=bcrypt($validated['password']);
        $user = User::create($validated);
        auth()->login($user);  
         return redirect('/');
        

    }

    
        public function process (Request $request){
            $validated = $request->validate([
        
                "email" =>['required','email'] ,
                "password" => ['required'],
            ]);
            if(auth()->attempt($validated))
            $request->session()->regenerate();
            return redirect('/index');  

    }
}
