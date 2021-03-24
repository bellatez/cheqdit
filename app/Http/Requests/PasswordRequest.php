<?php

namespace App\Http\Requests;

use App\Rules\CurrentPasswordCheckRule;
use App\Rules\IsValidPassword;
use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'old_password' => [
                'required', 
                'min:8', // must contain a special character
                new CurrentPasswordCheckRule],
            'password' => ['required', new IsValidPassword(), 'confirmed', 'different:old_password'],
            'password_confirmation' => ['required', 'min:8'],
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'old_password' => __('current password'),
        ];
    }
}
