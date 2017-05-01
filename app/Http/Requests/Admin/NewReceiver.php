<?php

namespace App\Http\Requests\Admin;

use App\Models\Receiver;
use Illuminate\Foundation\Http\FormRequest;

class NewReceiver extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'package_id' => 'required|exists:packages,id',
            'status' => 'required'
        ];
    }


    public function save()
    {
        Receiver::create([
            'user_id' => $this->user_id,
            'package_id' => $this->package_id,
            'status' => 0,
        ]);

        flash()->overlay('Receiver created');
    }
}
