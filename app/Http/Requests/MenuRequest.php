<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class MenuRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules(Request $request)
    {
        $iten_id = !empty($request['item_id']) ? ',' . $request['item_id'] : '';
        return [
            'link' => 'required',
            'url' => 'required|regex:/^[a-z-\d]+$/|unique:menus,url' . $iten_id,
            'title' => 'required',
        ];
    }
    public function messages(){
        return [
            'url.regex' => 'Menu url only a-z , numbers and -',
        ];
    }

    
}