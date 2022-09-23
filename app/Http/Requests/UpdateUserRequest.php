<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    // "password" => ['nullable', 'confirmed', Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
    public function rules()
    {
        return [
            "name" => "required|max:255",
            "email" => "required|max:255",
            "password" => ['nullable', 'confirmed', Password::min(8)],
            "first_name" => "required|max:255",
            "last_name" => "required|max:255",
            "phone" => "required|max:12",
            "nic" => "required|max:12",
            "address" => "required",
            "city" => "required",
            "state" => "required",
            "zip" => "required",
            "country" => "required",
            "role" => "required",
        ];
    }
}
