<?php

namespace App\Http\Requests\Dashboard\Product;

use App\Enums\Product\InventoryTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProductInventoryRequest extends FormRequest
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
            'operation_type' => ['required', 'string', Rule::in(InventoryTypeEnum::toArray())],
            'steps'     => 'numeric|min:1,required',
            'product_id' => 'required|exists:products,id'
        ];
    }
}
