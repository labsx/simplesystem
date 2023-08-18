<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Admin;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function login(){
        return view ('/login');
    }
    public function index(){
        $data = array("students" => DB::table('students')->orderBy('created_at', 'desc')->simplePaginate(10));
        return view ('index', $data);
    }

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
            // $validated = $request->validate([
        
            //     "email" =>['required','email'] ,
            //     "password" => ['required'],
            // ]);
            // if(auth()->attempt($validated))
            // $request->session()->regenerate();
            // return redirect('/index');  
                $validated = $request->validate([
        
                "email" =>['required','email'] ,
                "password" => ['required'],
            ]);
            if(auth()->attempt($validated)){
            $request->session()->regenerate();
            return redirect('/index');  
            }else{
                return view ('/login');;
            }
            // $email = $request->email;
            // $password = $request->password;
            
       
            // if (auth()->attempt(array('email' => $email , 'password' => $password ))){
            //     return view ('/index');
            //  } else {        
            //     return view ('/login');;
            //  }  
            

    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect ('/');
       
    }

}
