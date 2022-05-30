<?php

namespace App\Http\Requests\Portfolio;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UpdatePortfolioRequest extends FormRequest{
    /**
     * @param Request $request
     * @return array
     */
    public function rules(Request $request)
    {
        return [
            'title' => 'nullable|string|max:255|min:3',
            'slug' => 'nullable|string|max:255|min:3|unique:portfolios,slug',
            'description' => 'nullable|string|min:3',
            'sub_title' => 'nullable|string|min:3',
            'background_color' => 'nullable|string|min:3',
            'link' => 'nullable|string|min:3',
            'case_industry' => 'nullable|string|min:3',
            'location' => 'nullable|string',

            'services' => 'nullable|array',
            'services.*' => 'required|integer',
            'technologies' => 'nullable|array',
            'technologies.*' => 'required|integer',
            'industries' => 'nullable|array',
            'industries.*' => 'required|integer',

            'picture' => 'nullable|image',
            'picture_meta_alt' => 'nullable|string',
            'picture_meta_title' => 'nullable|string'
        ];
    }
}
