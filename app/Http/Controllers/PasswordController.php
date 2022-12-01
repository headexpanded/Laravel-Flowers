<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    //
    public function update(Request $request)
    {

        $request->user()->fill(
            [
                'password' => Hash::make($request->newPassword)
            ]
        )->save();
    }
}
