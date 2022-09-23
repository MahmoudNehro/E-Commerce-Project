<?php

namespace App\Http\Requests\Dashboard\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
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
            'quantity'   => [Rule::requiredIf($this->method()  == 'POST'), 'numeric', 'min:1'],
            'specifications'   => 'array',
            'specifications'   => 'nullable',
            'specifications.key'   => 'nullable',
            'specifications.value'   => 'required_if:options.*.key,string',
            'price'  => 'required|numeric|max:20000000',
            'category_id' => 'required|exists:categories,id',
        ];
    }
}
