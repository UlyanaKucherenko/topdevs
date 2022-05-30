<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsFormRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:100|min:3',
            'email' => 'required|email',
            'message' => 'required|string|min:3',
            'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'skype' => 'nullable|string|min:3',
            'attachment.*' => 'nullable|file',
            'get_NDA' => 'nullable|bool'
        ];
    }
}
