<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'nama' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6|max:16',
            'alamat' => 'required',
            'telepon' => 'required|regex:/(01)[0-9]{9}/|min:10|max:12'
        ];
    }
}
