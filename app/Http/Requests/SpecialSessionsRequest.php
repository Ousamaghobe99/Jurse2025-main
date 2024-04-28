<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpecialSessionsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'description' => ['required'],
            'order' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
