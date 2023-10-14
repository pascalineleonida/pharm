<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;

class LoginControlleur extends Controller
{
    public function index(){
        return view('pharma.login');
    }

    public function login(LoginRequest $request){
        $post = $request->validated();
        if(Auth::attempt($post)){
            $request->session()->regenerate();
            return redirect()->route('index');
        }
    }

    public function sign(){
        return view('pharma.sign');
    }

    public function storeSign(UserRequest $request){
        $post = User::create($request->validated());
        return redirect()->route('index');
    }
}
