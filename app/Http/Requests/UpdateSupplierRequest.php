<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateSupplierRequest extends FormRequest
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
        $supplierId = $this->route('id');

        return [
            "name" => [
                "string",
                "required",
                Rule::unique('suppliers')->where(function ($query) {
                    return $query->where('user_id', Auth::id());
                })->ignore($supplierId),
            ],
            "email" => [
                "string",
                "email",
                "required",
                Rule::unique('suppliers')->where(function ($query) {
                    return $query->where('user_id', Auth::id());
                })->ignore($supplierId),
            ],
            "phone" => "string|required",
            // Image is optional in update (because maybe user doesn't want to change it)
            "image" => "nullable|file|mimetypes:image/jpeg,image/png,image/webp,image/jpg",
            "brand" => "string|required",
        ];
    }
}
