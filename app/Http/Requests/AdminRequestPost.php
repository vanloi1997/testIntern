<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequestPost extends FormRequest
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'           =>    'required|max:150|min:3|unique:blogs,title,'.$this->id,
            'slug'            =>    'required',
            'category_id'     =>    'required',
            'content short'   =>    'required',
            'content'         =>    'required',
            'image'           =>    'required',
            'title_seo'       =>    'required',
            'description_seo' =>    'required',
            'key_seo'         =>    'required',
            'active'          =>    'required',
            'slug'            =>    'required',
            'slug'            =>    'required',
        ];
    }
}
