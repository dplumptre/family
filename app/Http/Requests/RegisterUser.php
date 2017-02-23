<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Foundation\Http\FormRequest;

class RegisterUser extends FormRequest
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
            'username' => 'required|alpha_dash|min:4|max:20|unique:users,username',
            'email' => 'required|email|max:60|unique:users,email',
            'password' => 'required|confirmed|min:6|max:20',
            'password_confirmation' => 'required',
            'terms' => 'accepted',
        ];
    }

    public function messages()
    {
        return [
            'password.confirmed' => 'Both passwords do not match.Please try again.',
            'terms.accepted' => 'Please agree with our terms & conditions',
        ];
    }


    public function save()
    {
        return User::create([
            'username' => $this->username,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);
    }
}
