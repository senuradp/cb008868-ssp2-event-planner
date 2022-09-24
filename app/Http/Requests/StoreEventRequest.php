<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
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
    public function rules()
    {
        return [
            'category_id' => 'nullable',
            'name' => 'required|string|max:255',
            'url' => 'nullable|string|max:255',
            'description' => 'nullable',
            'date' => 'required|date',
            'time' => 'nullable|string',
            'location' => 'nullable',
            'contact' => 'nullable',
            'email' => 'nullable|email',
            'link' => 'nullable',
            'status' => 'nullable:integer',
        ];
    }
}
