<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create(){
        return view('registration.create');
    }
    public function store(){
        
        // validate 
        $this->validate(request(),[
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed'
        ]);

        //add and save user to the DB
        $user = User::create(request(['name','email','password']));
        
        //sign in
        auth()->login($user);

        // redirect to home page
        return redirect()->home();
    }   
}
