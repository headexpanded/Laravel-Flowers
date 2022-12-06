<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use App\Models\CustomUser;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function index()
    {
        $users = CustomUser::paginate(6);
        return view('users', ['users' => $users]);
    }

    // register new user
    public function create()
    {
        return view('/register');
    }

    public function store(StoreUserRequest $request)
    {

        $newUser = new CustomUser;
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->password = $request->password;


        return ($newUser->save()) ? redirect('/flowers')->with('message', '<p class="_flowerEditUpdateMsg_OK"><span>Welcome ' . $request->name . '! Buy some flowers!</span></p>') : back()->with('message', '<p class="_flowerEditUpdateMsg_Not_OK"><span>Registration Failed</span></p>');
    }

    public function show($id)
    {
        $user = CustomUser::where('id', $id)->first();
        
        return response(view('user_detail', ['user' => $user]));
    }

    public function login()
    {
        return view('login_form');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('show');
        }
        return back()->withErrors([
            'email' => 'Please check your email and try again.',
            'password' => 'Password does not match. Try again.'
        ])->onlyInput('email');
    }

    public function logout()
    // logout
    {session()->flush();
    // re-direct to login page
    return redirect('/login'->with('message', 'You are logged out.'));}
}
