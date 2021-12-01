<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller {
    public function register(Request $request) {
        $this->validate($request, [
            'password_confirmation'=> 'required_with:password |same::password | confirmed',
            'email' => 'required | unique:users'
        ]);
        $FIO = $request->FIO;
        $FIO = explode(" ", $FIO);
        $name=$FIO[1];
        $surname = $FIO[0];
        unset($FIO[0]);
        unset($FIO[1]);
        if(User::create([
            'name' => $name,
            'surname' => $surname,
            'last_name' => implode(' ', $FIO),
            'login' => $request -> login,
            'email' => $request -> email,
            'password' => Hash::make($request -> password),
        ])){
            return redirect('/authorisation');
        }

    }
    public function authorisate(Request $request) {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/cabinet');

        } else {
            return response('fu', 401);
        }
    }
    public function unauthorisate(Request $request) {
        Auth::logout();
        return redirect('/main');
    }
}