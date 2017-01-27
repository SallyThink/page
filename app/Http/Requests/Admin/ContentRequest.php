<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ContentRequest extends FormRequest
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
            'content_name' => 'required',
            'mains_id' => 'required|numeric|min:1',
           // 'background_image' => 'image|max:1024'
        ];
    }

    /**
     * Custom error messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'mains_id.min' => 'Please select page'
        ];
    }

}
