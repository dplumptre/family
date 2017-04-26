<?php

namespace App\Http\Requests\Admin;

use App\Models\AutomatedReceiver;
use Illuminate\Foundation\Http\FormRequest;

class NewAutomatedReceiver extends FormRequest
{
    protected $automatedReceiver;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(AutomatedReceiver $automatedReceiver)
    {
        $this->automatedReceiver = $automatedReceiver;
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
        ];
    }


    public function save()
    {
        $exists = $this->automatedReceiver->where('user_id', $this->user_id)->where('package_id', $this->package_id)->first();

        if ( !$exists )
        {
            $lastPosition = (int) $this->automatedReceiver->getTotalPosition() + 1;
            $this->automatedReceiver->create([
                'user_id' => $this->user_id,
                'package_id' => $this->package_id,
                'position' => $lastPosition,
            ]);
            $this->saved();
            return;
        }
        $this->existing();
        return;
    }


    public function saved()
    {
        flash()->overlay('Automated Receiver created');
    }


    public function existing()
    {
        flash()->overlay('Automated Receiver already exists');
    }
}
