<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
   
    public function rules()
    {
        return [
            //
            'blog.title' =>'required|string|max:100',
            'blog.body' =>'required|string|max:4000',
        ];
    }
}
