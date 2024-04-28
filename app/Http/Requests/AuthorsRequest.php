<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'firstname' => ['required'],
            'lastname' => ['required'],
            'organism' => ['required'],
            'country' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
