<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class IllnessRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules =  [
            'name' => 'required|string',
            'description' => 'required|string',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        if (request()->method() == 'PUT' || request()->method() == 'PATCH') {
            $rules['img'] = [
                'nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048',
            ];
        }
        return $rules;
    }
}
