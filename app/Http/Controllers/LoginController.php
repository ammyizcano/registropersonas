<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $credentials =[
            "email"=> $request->email,
            "password"=>$request->password,
        ];
        //$remember=($request->has('remember') ? true :false);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('persona.detalle');

        }else{
            
            return redirect()->route('persona.index')->with('store','Credenciales incorrectas');

        }


    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');

    }
}
