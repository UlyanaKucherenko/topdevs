<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResumeRequest extends FormRequest
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
            'message' => 'nullable|string|min:3',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'attachment.*' => 'nullable|file',
        ];
    }
}
