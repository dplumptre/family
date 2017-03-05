<?php

namespace App\Http\Requests;

use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRole extends FormRequest
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
        return
            [
                'email' => 'exists:users,email',
                'SA' => 'filled',
                'AD' => 'filled',
                'GU' => 'filled',
                'RE' => 'filled',
                'ME' => 'filled',
                'US' => 'filled',

            ];
    }


    public function save()
    {
        $user = User::where('email', $this->email)->first();
        $user->roles()->detach();

        if ( $this->SA ){
            $user->roles()->attach(Role::where('type', 'superadmin')->first());
        }
        if ( $this->AD ){
            $user->roles()->attach(Role::where('type', 'admin')->first());
        }
        if ( $this->GU ){
            $user->roles()->attach(Role::where('type', 'guider')->first());
        }
        if ( $this->RE ){
            $user->roles()->attach(Role::where('type', 'referrer')->first());
        }
        if ( $this->ME ){
            $user->roles()->attach(Role::where('type', 'member')->first());
        }
        if ( $this->US ){
            $user->roles()->attach(Role::where('type', 'user')->first());
        }
    }
}
