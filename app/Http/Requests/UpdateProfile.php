<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProfile extends FormRequest
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
            'firstname' => 'required|string|min:3|max:20',
            'lastname' => 'required|string|min:3|max:20',
            'phone' => ['regex:/^(\+?)(234)(7|8|9)\d{9}/'],
            'bank_name' => ['required', Rule::in(array_keys(banks()))],
            'account_name' => 'required|string',
            'account_number' => 'required|digits:10',
            'account_type' => ['required', Rule::in(['savings', 'current'])],
            'bank_branch' => 'string',
        ];
    }


    public function messages()
    {
        return [
            'phone.regex' => 'Please use +2348123456789 format for Phone Number',
        ];
    }


    public function save()
    {
        if ($this->user()->userDetail == null):
            auth()->user()->userDetail()->create($this->all());
            $this->saved();
        else:
            auth()->user()->userDetail->fill($this->all())->save();
            //auth()->user()->push();
            $this->updated();
        endif;

    }


    private function saved()
    {
        notify()->flash('Details saved', 'success', ['text' => 'Your details have been saved successfully']);
    }

    private function updated()
    {
        notify()->flash('User Details updated', 'success', ['text' => 'Your details have been updated successfully']);
    }
}
