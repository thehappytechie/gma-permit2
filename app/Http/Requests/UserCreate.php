<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class UserCreate extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' =>  ["required", "string"],
            'email' =>  ["required", "email", Rule::unique(User::class)],
            'password' =>  ["required", "string", new Password(), "confirmed"],
            'disable_login' =>  ["boolean", "nullable"],
            'agent_id' =>  ["boolean", "nullable"],
            'force_password_change' =>  ["boolean", "nullable"],
        ];
    }
}
