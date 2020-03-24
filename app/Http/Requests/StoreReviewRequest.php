<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviewRequest extends FormRequest
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
            'comment' => ['required', 'max:1000'],
            'star' => ['required', 'between:1,5'],
        ];
    }

    /**
     * @return array
     */
    public function attributes(): array
    {
        return [
            'comment' => 'コメント',
            'star' => 'スター',
        ];
    }
}
