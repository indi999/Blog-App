<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SessionsController extends Controller
{
    public function __construct(){
        $this->middleware('guest',['except'=>'destroy']);
    }

    public function create(){
        return view('sessions.create');
        
    }
    public function store(){
        // validate
        $this->validate(request(),[
            'email'=>'required|email',
            'password'=>'required'
        ]);

        // Attempt to autenticate new user
        // If so, sign in  
        // If not redirect beck
        // Redirect to the home page
        if(! auth()->attempt(request(['email','password'])) ) {
            return back()->withErrors([
                'message'=>'Please chack your credentials and try again.'
            ]);
        }
        return redirect()->home();
    }

    public function destroy(){
        auth()->logout();
        return redirect()->home();
    }
}
