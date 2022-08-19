<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function Authentication(Request $request) {
        $user = new User();

        if(count($user->where('email', $request->email)->get() ) == 0) {
            return "Такого пользователя не существует";
        }
        $user = $user->where('email', $request->email)->first();
        if(!Hash::check($request->password, $user->password)) {
            return "Неправильный пароль";
        }
        Auth::login($user);
        return redirect( '/');
    }
    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
