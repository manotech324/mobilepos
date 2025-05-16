<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index() {
        return view("pages.auth.signin");
    }
    function store(LoginUserRequest $rq) {
        $data=$rq->validated();
        if(Auth::attempt($data, $rq->filled('remember'))) {
            $rq->session()->regenerate();
            return redirect(route('dashboard'))->with("login",true);
        }
        return back()->withErrors([
            "email"=>"Invalid credentials",
        ])->onlyInput("email");
    }
    function destroy() {
        Auth::logout();
        return redirect(route('login'))->with('logout',true);
    }
}
