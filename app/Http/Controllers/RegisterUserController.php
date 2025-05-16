<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Models\User;

class RegisterUserController extends Controller
{
    public function index()
    {
        return view('pages.auth.register');
    }
    public function store(RegisterUserRequest $req)
    {
        $data = $req->validated();
        $user = User::create($data);
        return redirect(route("login"))->with("register", true);
    }
}
