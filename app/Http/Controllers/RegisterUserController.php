<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    function index() {
        return view('pages.register');
    }
}
