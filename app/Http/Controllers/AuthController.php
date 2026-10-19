<?php

namespace App\Http\Controllers;

use App\Models\FormData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validate = $request->validate([
            'username' => 'required | string | max:25',
            'password' => 'required | string | max:25',
        ]);
        if (Auth::attempt(['username' => $validate['username'], 'password' => $validate['password']])) {
            $request->session()->regenerate();
            //Note:you must PUT the vars in the session like this, and you can pull them out,see routes
            session()->put('username', $validate['username']);
            return redirect()->route('dashboard');
        }

        throw ValidationException::withMessages([
            'credentials' => 'sorry incorrect login'
        ]);

    }

    public function logout(Request $request)
    {
        //use Auth to handle stuff like this
        Auth::logout();

        $request->session()->invalidate(); //session destroy
        $request->session()->regenerateToken(); //Prevent CSRF

        return redirect()->route('signUp');
    }

    public function signUp(Request $request)
    {
        $validate = $request->validate([
            'username' => 'required | string | max:25 | unique:form_data,username',
            'password' => 'required | string | max:25',
        ]);
        if ($validate['username'] == null || $validate['password'] == null) {
            throw ValidationException::withMessages(['credentials' => 'username or password is empty']);
        }

        //THIS HASHES THE PASSWORD
        $validate['password_hash'] = Hash::make($validate['password']);

        //for future reference,name the db password just password
        unset($validate['password']);

        FormData::create($validate);

        return redirect()->route('signIn');
    }
}
