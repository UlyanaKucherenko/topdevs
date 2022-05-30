<?php

namespace App\Http\Requests\Review;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class CreateReviewRequest extends FormRequest
{
    /**
     * @param Request $request
     * @return array
     */
    public function rules(Request $request)
    {
        return [
            'customer_name' => 'required|string|max:100|min:3',
            'country' => 'required|string|max:100|min:2|',
            'customer_position' => 'required|string|max:100|min:3',
            'link' => 'nullable|string',
            'text' => 'required|string|min:3',
        ];
    }
}
