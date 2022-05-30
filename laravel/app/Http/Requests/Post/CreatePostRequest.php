<?php

namespace App\Http\Requests\Post;

use App\Services\Constants\PostStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class CreatePostRequest extends FormRequest
{
    /**
     * @param Request $request
     * @return array
     */
    public function rules(Request $request)
    {
        return [
            'title' => 'required|string|max:100|min:3',
            'slug' => 'required|string|max:100|min:3|unique:posts,slug',
            'description' => 'required|string|min:3',
            'short_description' => 'nullable|string',
            'is_show_to_main_page' => 'nullable|boolean',
            'banner_text' => 'nullable|string',
            'is_active_banner' => 'nullable|boolean',

            'categories' => 'required|array',
            'categories.*' => 'required|integer',

            'industries' => 'nullable|array',
            'industries.*' => 'nullable|integer',

            'tags' => 'required|array',
            'tags.*' => 'required|integer',

            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'keywords' => 'nullable|string',

            'status' => ['required', Rule::in(PostStatus::getStatuses())],
            'publish_at' => [
                Rule::requiredIf(function () use ($request) {
                    return $request->has('status') && $request->status === PostStatus::POST_FUTURE;
                }),
                'date'
            ],
            'timezone_offset' => [
                Rule::requiredIf(function () use ($request) {
                    return $request->has('publish_at');
                }),
                'integer'
            ],
            'read_time' => 'required|string',
            'picture' => 'required|image',
            'picture_meta_alt' => 'nullable|string',
            'picture_meta_title' => 'nullable|string'
        ];
    }
}
