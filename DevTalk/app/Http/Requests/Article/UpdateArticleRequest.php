<?php

namespace App\Http\Requests\Article;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check() && Auth::user()->id === $this->input('user_id');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id' => ['required', 'exists:articles,id'],
            'slug' => ['required', 'string', 'max:255', 'unique:articles,slug,' . $this->input('id'), 'regex:/^[a-zA-Z0-9-]+$/'],
            'cover' => ['nullable', 'image', 'max:2048', 'mimes:jpeg,jpg', 'dimensions:min_width=800,min_height=400,max_width=1200,max_height=600'],
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'topic_id' => ['required', 'exists:topics,id'],
            'user_id' => ['required', 'exists:users,id'],
            'is_published' => ['required', 'boolean'],
        ];
    }
}
