<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ProfileUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'job_title' => 'required',
            'gender' => 'required'
        ];
    }


    public function attributes()
    {
        return [
            'name' => 'Nama',
            'email' => 'Alamat email',
            'job_title' => 'Status jabatan',
            'gender' => 'Jenis kelamin'
        ];
    }

    public function passedValidation()
    {
        if ($this->filled('password'))
            $this->merge(['password' => bcrypt($this->password)]);
    }

    public function validationData() {
        return collect($this->all())
            ->filter(fn($value) => $value !== null)
            ->toArray();
    }
}
