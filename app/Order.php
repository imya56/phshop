<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cart;
use Session;
use DB;

class Order extends Model
{

/**
 *
 * Save a new order
 *
 * @param $request[Object] object from the class Request
 * @return null
 *
 */

    public static function save_new()
    {
        $order = new self;
        $order -> user_id = Session::get('user_id');
        $order -> total = Cart::getTotal();
        $order -> data = serialize(Cart::getContent()->toArray());
        $order -> save();

    }

/**
 *
 * Get all orders
 *
 * 
 * @return array
 *
 */
    public static function getAll()
    {
        return DB::table('orders AS o')
            ->join('users AS u', 'u.id', '=', 'o.user_id')
            ->select('u.name', 'o.*')
            ->orderBy('o.created_at', 'desc')
            ->get()
            ->toArray();
    }


}