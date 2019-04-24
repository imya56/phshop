<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ContentRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules(Request $request)
    {
         return [
             'menu_id' => 'required',
            'article' => 'required',
            'title' => 'required',
        ];
    }
    public function messages(){
        return [
            'url.regex' => 'Menu url only a-z , numbers and -',
        ];
    }

    
}