<?php

namespace App\Http\Requests;

use App\Events\PasswordChanged;
use App\Listeners\PasswordChange;
use App\Listeners\PasswordChangeSuccess;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ChangePassword extends FormRequest
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
            'current_password' => 'required|min:6|max:20',
            'new_password' => 'required|min:6|max:20|confirmed',
            'new_password_confirmation' => ''
        ];
    }


    public function save()
    {
        if ($this->checkPassword($this->current_password)) {
            //check if both new and old are the same
            if ($this->current_password == $this->new_password) {
                $this->passwordTheSame();
                return;
            }
            $this->resetPassword($this->new_password);
            $this->passwordChanged();
            return;
        }
        $this->passwordChangeFailed();
    }

    protected function passwordChanged()
    {
        event(new PasswordChanged($this->user()));
        notify()->flash('Password changed', 'success');
    }

    protected function passwordTheSame()
    {
        notify()->flash('Password unchanged', 'warning', ['text'=>'Passwords are the same']);
    }

    protected function passwordChangeFailed()
    {
        notify()->flash('Password changed failed', 'error');
    }

    protected function resetPassword($password)
    {
        $id = $this->user()->id;
        $this->user()->forceFill([
            'password' => bcrypt($password),
            'remember_token' => Str::random(60),
        ])->save();
        //Auth::logout();
        //Auth::loginUsingId($id, true);
    }

    protected function checkPassword($new)
    {
        $old = auth()->user()->getAuthPassword();
        if (Hash::check($new, $old)) {
            return true;
        }
        return false;
    }
}
