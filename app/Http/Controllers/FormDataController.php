<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use App\Models\FormData;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\ValidationException;

//using this as my CRUD controller
class FormDataController extends Controller
{
    public function index()
    {
        return "hello from form data controller";
    }

    //create
    public function create()
    {

    }

    //Read
    function show($id)
    {
        $formData = FormData::findorfail($id);
        return view('profile', ['formData' => $formData]);
    }

    //Update
    function update(Request $request)
    {
        //validate the data,ensure it meets format
        $validate = $request->validate([
            'username' => 'required | min:3 | max:20 ',
            'password_hash' => 'required | min:3 | max:20 | confirmed',
        ]);
        if (auth()->user()->username == $validate['username']) {
            throw ValidationException::withMessages([
                'username' => 'username should be different'
            ]);
        }else{
            $username=Auth::user();
            $username->username=$validate['username'];
            $username->save();

            //with works like a session variable, and can be accessed like one
            return redirect(route('dashboard.changeUser'))->with('success', 'Your profile has been updated');
        }
    }

}
