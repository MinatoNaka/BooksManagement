<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:1000'],
            'published_at' => ['required', 'date'],
            'price' => ['required', 'digits_between:0,10'],
            'author_id' => ['required', 'exists:users,id'],
            'category_ids' => ['exists:categories,id'],
        ];
    }

    /**
     * @return array
     */
    public function attributes(): array
    {
        return [
            'title' => 'タイトル',
            'description' => '概要',
            'published_at' => '出版日',
            'price' => '価格',
            'author_id' => '著者',
            'category_ids' => 'カテゴリー',
        ];
    }
}
