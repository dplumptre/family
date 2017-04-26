<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Foundation\Auth\User;

class UpdateBankDetails extends FormRequest
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
            'bank_name' => 'required',
            'account_name' => 'required',
            'account_number' => 'required|numeric',
        ];
    }
    
    
    
      public function save($id)
    {
        $user = User::find($id);
        $user->bank_name = $this->bank_name;
        $user->bank_branch = $this->bank_branch;
        $user->account_name = $this->bank_name;
        $user->account_number = $this->bank_name;
        $user->account_type = $this->bank_name;
        return   $user->save();
    }  
    
    
    
    
    
    
    
}
