<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentAuthController extends Controller
{
    public function login(){
        return view('StudentLogin');
    }

    public function check(Request $request){
     
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5'
        ]);
        $studentInfo = Student::where('email','=',$request->email)->first();

        if(!$studentInfo){
       
            return back()->withErrors(['msg' => 'Email not registered!']);

           
        }else{
            if($request->password == $studentInfo->password ){
                $request->session()->put('LoggedStudent',$studentInfo->id);
                return redirect ('/dashboard');
     
            }else{
                return back()->withErrors(['msg' => 'Wrong Password!']);

       
            }
        }

        }
    }
