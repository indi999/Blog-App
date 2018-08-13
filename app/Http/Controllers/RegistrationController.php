<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\WelcomeAgain;
use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    public function create(){
        return view('registration.create');
    }
    public function store(RegistrationForm $form){
        
        // validate   
        // RegistrationRequest class
 
        //add and save user to the DB
        $form->persist();
        // return thanks for registration message
        session()->flash('message', 'Thank`s for your registration!');

        // redirect to home page
        return redirect()->home();
    }   
}
