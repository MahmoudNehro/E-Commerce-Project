<?php

namespace App\Http\Requests\Api\User;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

class ContactUsRequest extends FormRequest
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
    protected function failedValidation(Validator $validator)
    {
        if ($this->expectsJson()) {

            $errors = (new ValidationException($validator))->errors();

            throw new HttpResponseException(

                response()->json([

                    'code' => 400,
                    'status' => false,
                    'message' => 'error creating data',
                    'data' => $errors

                ], 400)

            );
        }



        parent::failedValidation($validator);
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'message' => 'required|min:5|max:1000'
        ];
    }
}
