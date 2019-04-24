<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\User;
use Cart;
use DB;
use Illuminate\Http\Request;
use Session;

class ShopController extends MainController
{

    public function __construct()
    {

        parent::__construct();
        $lik = DB::table('wishlists')->where('user_id', Session::get('user_id'))->get();
    }

    public function categories()
    {

        self::$data['pageTitle'] .= 'Shop Categories';
        return view('content.categories', self::$data);
    }

    public function products($curl)
    {

        Product::getProducts($curl, self::$data);
        User::getLikes(self::$data);

        return view('content.products', self::$data);

    }

    public function item($curl, $purl)
    {

        Product::getProduct($purl, self::$data);
        User::getLikes(self::$data);
        return view('content.item', self::$data);
    }

    public function addToCart(Request $request)
    {
        Product::addToCart($request['pid']);
    }

    public function addToWishlist(Request $request)
    {

        Product::addToWishlist($request['pid']);
    }

    public function checkout()
    {
        self::$data['pageTitle'] .= 'Checkout';
        $cart = Cart::getContent()->toArray();
        sort($cart);
        self::$data['cart'] = $cart;
        return view('content.checkout', self::$data);

    }

    public function emptyCart()
    {
        Cart::clear();
        return redirect('shop/checkout');
    }

    public function updateCart(Request $request)
    {
        Product::updateCart($request);
        return redirect('shop/checkout');
    }
    public function removeItem(Request $request)
    {
        Cart::remove($request['pid']);
        return redirect('shop/checkout');
    }

    public function order()
    {
        if (Cart::isEmpty()) {
            return redirect('/shop/checkout');
        } else {
            if (!Session::has('user_id')) {
                return redirect('/user/signin?rn=shop/checkout');
            } else {
                Order::save_new();
                Cart::clear();
                return view('content.order_end', self::$data);
            }
        }
    }

    public function all()
    {
        self::$data['products'] = Product::all()->toArray();

        // dd(self::$data);
        return view('content.products', self::$data);

    }

    public function searchProduct(Request $request)
    {

        $text = $request['text'];
        if ($text) {
            $products = DB::table('products')->where('ptitle', 'like', '%' . $request['text'] . '%')
                ->select('ptitle', 'id')->get();
            echo json_encode($products);
        }

    }

    public function searchItemById(Request $request)
    {
        $search = $request['text'] ?? '';
        $product = DB::table('products AS p')->join('categories AS c', 'c.id', '=', 'p.categorie_id')
            ->select('c.curl', 'p.*')
            ->where('p.ptitle', $search)
            ->select('p.purl', 'c.curl')
            ->get();

        if ($product) {
            $product->toArray();
            return redirect('shop/' . $product[0]->curl . '/' . $product[0]->purl);
        }

    }

}