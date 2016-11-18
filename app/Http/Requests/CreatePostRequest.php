<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreatePostRequest extends Request
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
        if ($this->method() == 'PATCH') {
            $emailRule = 'email';
        } else {
            $emailRule = 'required|email|unique:users,email';
        }

        return [
            'name' => 'required|min:3',
            'email' => $emailRule,
            'message' => 'required|min:6'
        ];
    }
}
