<?php

namespace App\Http\Requests\Dashboard\Product;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name'       => 'array',
            'name'       => 'required',
            'name.ar'       => 'required',
            'name.en'       => 'required',
            'active'       => 'nullable|max:1',
            'description' => 'array',
            'description' => 'nullable',
            'description.ar' => 'nullable',
            'description.en' => 'nullable',
            'parent_id'   => 'nullable'
        ];
    }
}
