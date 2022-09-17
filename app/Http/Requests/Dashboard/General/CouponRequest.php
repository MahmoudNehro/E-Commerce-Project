<?php

namespace App\Http\Requests\Dashboard\General;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CouponRequest extends FormRequest
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
            'amount' => 'required|numeric|min:1|max:90',
            'active' => 'nullable|max:1',
            'start_at' => 'required|date',
            'end_at' => 'required|date|after_or_equal:start_at',
        ];
    }
}
