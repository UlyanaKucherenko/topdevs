<?php

namespace App\Http\Requests\Portfolio;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CreatePortfolioRequest extends FormRequest{
    /**
     * @param Request $request
     * @return array
     */
    public function rules(Request $request)
    {
        return [
            'title' => 'required|string|max:255|min:3',
            'slug' => 'required|string|max:255|min:3|unique:portfolios,slug',
            'description' => 'required|string|min:3',
            'sub_title' => 'required|string|min:3',
            'background_color' => 'required|string|min:3',
            'link' => 'required|string|min:3',
            'case_industry' => 'nullable|string|min:3',
            'location' => 'nullable|string',

            'services' => 'required|array',
            'services.*' => 'required|integer',
            'technologies' => 'required|array',
            'technologies.*' => 'required|integer',
            'industries' => 'required|array',
            'industries.*' => 'required|integer',

            'picture' => 'required|image',
            'picture_meta_alt' => 'nullable|string',
            'picture_meta_title' => 'nullable|string'
        ];
    }
}
