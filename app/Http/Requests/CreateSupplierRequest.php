<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateSupplierRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => ["string", "required", function ($attr, $val, $fail) {
                $exists = Auth::user()
                    ->suppliers()
                    ->where('name', $val)
                    ->exists();

                if ($exists) {
                    $fail("The selected $attr is invalid for your account.");
                }
            }],
            "email" => ["email","string","required", function ($attr, $val, $fail) {
                $exists = Auth::user()
                    ->suppliers()
                    ->where('email', $val)
                    ->exists();

                if ($exists) {
                    $fail("The selected $attr is invalid for your account.");
                }
            }],
            "phone" => "string|required",
            "image" => "required|file|mimetypes:image/jpeg,image/png,image/webp,image/jpg",
            "brand" => "string|required"
        ];
    }
}
