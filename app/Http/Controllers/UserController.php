<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    //

    public function index()
    {
        $users = User::all();
        return view('users', ['users' => $users]);
    }

    // register new user
    public function register()
    {
        return view('/register');
    }

    public function show($id)
    {
        $user = User::where('id', $id)->first();
        return response(view('user-detail', ['user' => $user]));
    }

    public function addNewUser(Request $request)
    {
        // validate
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(8)
                ->mixedCase()
                ->uncompromised()]
        ]);

        $newUser = new User;
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->password = $request->password;
        $newUser->save();

        return ($newUser) ? redirect('/flowers')->with('message', '<p class="_flowerEditUpdateMsg_OK"><span>Welcome ' . $request->name . '! Buy some flowers!</span></p>') : back()->with('message', '<p class="_flowerEditUpdateMsg_Not_OK"><span>Registration Failed</span></p>');
    }
}
