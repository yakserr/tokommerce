<?php

namespace App\Http\Requests\User;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        if (request()->update == 'update_name') {
            return [
                'name' => 'required|string|max:255',
            ];
        } elseif (request()->update == 'update_birthday') {
            return [
                'birthday' => 'required|date',
            ];
        } elseif (request()->update == 'update_gender') {
            return [
                'gender' => 'required',
            ];
        } elseif (request()->update == 'update_email') {
            return [
                'email' => 'required|string|email|max:255|unique:users',
            ];
        } elseif (request()->update == 'update_password') {
            return [
                'password' => 'required|string|min:8|confirmed',
            ];
        } else if (request()->update == 'update_phone') {
            return [
                'phone' => 'required|max:15'
            ];
        }
    }
}
