<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\User;
use App\Mail\WelcomeAgain;

class RegistrationForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed'
        ];
    }

    public function persist()
    {
        // request = $this->only([])
        $user = User::create(request(['name','email','password']));
        
        // send Welcome email to the registred user
        \Mail::to($user)->send(new WelcomeAgain($user));

        //sign in
        auth()->login($user);
    }
}
