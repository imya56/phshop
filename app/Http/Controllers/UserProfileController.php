<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use DB;
use Illuminate\Http\Request;
use Session;

class UserProfileController extends MainController
{

    public function wishlist()
    {
        $user_id = Session::get('user_id');
        Product::wishlist(self::$data);
        self::$data['pageTitle'] .= 'My orders';
        return view('user.wishlist', self::$data);
    }

    public function deleteWishlist(Request $request)
    {

        $uid = Session::get('user_id');
        $pid = $request['pid'];

        DB::table('wishlists')->where([['user_id', '=', $uid], ['product_id', '=', $pid]])
            ->delete();
        return redirect('/user/wishlist');
    }

    public function myOrders()
    {
        $user_id = Session::get('user_id');
        self::$data['orders'] = Order::where('user_id', $user_id)->get()->toArray();
        self::$data['pageTitle'] .= 'My orders';

        return view('user.orders', self::$data);
    }

}