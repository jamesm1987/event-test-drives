<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ExhibitorCategoryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // 'event' => [
                // 'bail',
                // 'required',
                // 'string',
                // 'exists:events,slug',
            // ],
            'exhibitors' => ['sometimes', 'boolean'],
        ];
    }
}
