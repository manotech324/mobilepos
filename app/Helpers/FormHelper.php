<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Url;

class FormHelper
{
    public static function logoutForm()
    {
        return view('components.logout-form', [
            'url' => route('logout')
        ])->render();
    }
}
