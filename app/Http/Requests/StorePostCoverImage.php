<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostCoverImage extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the error message for the defined validation rules.
     *
     * @return array
     */

     public function messages(){

        return [
            'image.required' => 'please make sure you upload an image with the format : jpg,png,giv,svg',
        ];

     }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cover' =>'image'
        ];
    }
}
