<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameEditRequest extends FormRequest
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
            "title" => "required|string|min:5|max:150",
            "release_year" => "required|integer|min:1900",
            "poster" => "image|max:2048"
        ];
    }
}
