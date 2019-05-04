<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
class HomeProduct extends Model
{

     /*
     * save new home pages product if the place is free
     *
     * @param $request[Object] object from the class Request
     * 
     * @return redirect
     */

    public static function save_new ($request)
    {
        $p = HomeProduct::select('product_place')->get()->toArray();
        $places = [];
        foreach ($p as  $value) {
           $places[] = $value['product_place'];
        }
        if(!in_array($request['product_place'], $places)){
        
            $product = new HomeProduct;
            $product->product_id = $request['id'];
            $product->product_place = $request['position'];
            if($product->save()){
                Session::flash('sm', 'Product added');
                return redirect('cms/home-products');            
            }
            
        }
    }
}