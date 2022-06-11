<?php

namespace App\Http\Controllers;
use App\Models\Registration;

use Illuminate\Http\Request;


class RegistrationController extends Controller
{
      public function registration(){
        return view('registration');
    }

        public function registrationSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            "id"=>"required",
           
            'username'=>'required',
            'email'=>'email',
            'password'=>'required',
            'cpassword'=>'required',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
        ],
        //['name.required'=>"Please put you name here"]
       // ['username.required'=>"Please put you username here"]

    );
        $student = new  Registration();
        $student->name = $request->name;
        $student->username = $request->username;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->password = $request->password;
        $student->cpassword = $request->cpassword;
        $student->save();

        return redirect()->route('registration');
    }
        public function login(){
        return view('login');
    }
        public function loginSubmit(Request $request){
            $validate = $request->validate([        
            'username'=>'required',
            'password'=>'required',

        ],
        //['name.required'=>"Please put you name here"]
       // ['username.required'=>"Please put you username here"]

    );
        $teacher = Registration::where('username',$request->username)
                            ->where('password',$request->password)
                            ->first();

        // return $teacher;
        if($teacher){
            $request->session()->put('user',$teacher->name);
            return redirect()->route('registration');
           // echo session()->get('user');
        }
        $request->session()->flash('invalid','Invalid username and password');
       return back();

       
    }
    public function contactus(){
        return view('contactus');
    }
            public function messageSubmitted(Request $request){
            $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            'email'=>'email',
            'text'=>'required',


        ],
        //['name.required'=>"Please put you name here"]
       // ['username.required'=>"Please put you username here"]

    );}

}
