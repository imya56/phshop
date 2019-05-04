<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ProductRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules(Request $request)
    {
        $item_id = !empty($request['item_id']) ? ',' . $request['item_id'] : '';
        return [
            'categorie_id' => 'required',
            'title' => 'required',
            'url' => 'required|regex:/^[a-z\d-]+$/|unique:products,purl' . $item_id,
            'article' => 'required',
            'price' => 'required|numeric',
            'image' => 'image',
            'sale' => 'sometimes',
            'new_price' => 'numeric|required_if:sale,1',
            'old_price' => 'required_if:sale,1|numeric',

        ];
    }

    public function messages()
    {
        return [
            'url.regex' => 'Category url only with a-z and numbers and -',
            'old_price.required_if' => 'Old price required if the product on sale',
            'new_price.required_if' => 'New price required if the product on sale',

        ];
    }
}