<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("pages.auth.signin");
    }
    public function store(LoginUserRequest $rq)
    {
        $data = $rq->validated();
        if (Auth::attempt($data, $rq->filled('remember'))) {
            $rq->session()->regenerate();
            return redirect(route('dashboard'))->with("login", true);
        }
        return back()->withErrors([
            "email" => "Invalid credentials",
        ])->onlyInput("email");
    }
    public function destroy()
    {
        Auth::logout();
        return redirect(route('login'))->with('logout', true);
    }
}
