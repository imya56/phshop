<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Cart;
use Session;
use Image;
class Product extends Model
{
/**
 *
 * Get products by category
 *
 * @param $curl[string] product's category url
 * 
 * @param $data[array] array with all information for view
 * 
 * @return null
 *
 */
    public static function getProducts($curl, &$data)
    {

        $products = DB::table('products AS p')

            ->join('categories AS c', 'c.id', '=', '.p.categorie_id')
            ->where('c.curl', '=', $curl)
            ->select('c.ctitle','c.curl', 'p.*')
            ->paginate(9);

        if (!$products ->count()) {
            abort(404);
        } else {
            $data['pageTitle'] .= $products[0]->ctitle . ' products';
            $data['products'] = $products;

        }
    }

/**
 *
 * Get products for the home page
 *
 * 
 * @param $data[array] array with all information for view
 * 
 * @return null
 *
 */

    public static function homePage (&$data){


        $products = Product::rightJoin('home_products AS hp','products.id', '=', 'hp.product_id')
                             ->rightJoin('categories AS c', 'c.id', '=', 'products.categorie_id')
                             ->orderBy('hp.product_place', 'asc')
                             ->get()->toArray();

 
         $sale = Product::orderByRaw("RAND()")
         -> join('categories AS c', 'c.id', '=', 'products.categorie_id' )
         -> where('onSale',1)
         ->select('c.curl', 'products.*' )
         ->get()
         ->toArray();

        User::getLikes($data);
        $data['products'] = $products;
        $data['sale'] = $sale;
       // dd($data);

    }

/**
 *
 * Get one product
 *
 * @param $purl[string] product's  url
 * 
 * @param $data[array] array with all information for view
 * 
 * @return null
 *
 */
    public static function getProduct($purl, &$data)
    {

        if($product = self::where('purl' , '=', $purl)
        ->join('categories AS c','c.id','=', 'products.categorie_id')
        ->select('c.curl', 'products.*')->first()){
            $product = $product->toArray();
            $data['product'] = $product;
            $data['pageTitle'] .= $product['ptitle'];
            $cid = $product['categorie_id'];
          $data['other_products'] = Product::where('categorie_id', $cid)
           ->join('categories AS c', 'c.id', '=', 'products.categorie_id')
           ->select('c.curl', 'products.*')
           -> inRandomOrder()
           -> limit(4)
           -> get()
           ->toArray();
         } else {
             abort(404);
         }

    }

/**
 *
 * Add product to cart
 *
 * @param $pid[int] product's id 
 * 
 * @param $data[array] array with all information for view
 * 
 * @return null
 *
 */

    public static function addToCart($pid)
     {
       if( $product = self::find($pid)){

           $product = $product -> toArray();
           if(!Cart::get($pid)){

            Cart::add($pid, $product['ptitle'], $product['price'], 1, ['image'=>$product['pimage']]);
            Session::flash('tosterPos', 'toast-top-center');
            Session::flash('sm', $product['ptitle'] . ' aded to cart');
           }
       } else {
           abort(404);
       }


    }

/**
 *
 * Add product to wish list
 *
 * @param $pid[int] product's id 
 * 
 * 
 * @return null
 *
 */

    public static function addToWishlist($pid) {
        if(self::find($pid)){
       $uid = Session::get('user_id');

       $like = DB::table('wishlists')->where([
        ['user_id', '=', $uid],
        ['product_id', '=', $pid],
    ])->get()->toArray();
     if(! $like){
        DB::insert("INSERT INTO wishlists VALUES($uid, $pid)");
     }
    }
}

/**
 *
 * Update item quantity in cart
 *
 * @param $request[Object] object from the class Request
 * 
 * 
 * @return null
 *
 */

    public static function updateCart ($request) {

        if(!empty($request['pid']) && !empty($request['op'])) {

            if(is_numeric($request['pid'])) {

                if($request['op'] == 'plus') {
                    Cart::update($request['pid'], ['quantity' => 1]);
                } else if($request['op'] == 'minus') {
                    Cart::update($request['pid'], ['quantity' => -1]);
                }

            }

        }
    }

 /**
 *
 * Save a new product
 *
 * @param $request[Object] object from the class Request
 * 
 * @return null
 *
 */

    public static function save_new($request)
    {
        $image_name = 'default.jpg';

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $file = $request->file('image');
            $image_name = date('d.m.Y.H.i.s') . '-' . $file->getClientOriginalName();
            $file->move(public_path()  . '/images' , $image_name);
             $img = Image::make(public_path() . '//images/' . $image_name);
            $img->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();
        }
        $product = new self();
        $product->categorie_id = $request['categorie_id'];
        $product->ptitle = $request['title'];
        $product->particle = $request['article'];
        $product->pimage = $image_name;
        $product->price = $request['price'];
        $product->new_price = $request['new_price'] ?? null;
        $product->purl = $request['url'];
        $product->onSale = $request['sale'] ?? 0;
        $product->save();
        Session::flash('tosterPos', 'toast-top-center');
        Session::flash('sm', 'Product saved');
    }

/**
 *
 * Update product
 *
 * @param $request[Object] object from the class Request
 * @param $id[int] the id of updated product
 * 
 * @return null
 *
 */

    public static function update_item($request, $id)
    {


        $image_name = '';

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $file = $request->file('image');
            $image_name = date('d.m.Y.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . 'images', $image_name);
            $img = Image::make(public_path() . 'images/' . $image_name);
            $img->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();
        }
         $product = self::find($id);
        $product->categorie_id = $request['categorie_id'];
        $product->ptitle = $request['title'];
        $product->particle = $request['article'];
        if ($image_name) {
            $product->pimage = $image_name;
        }
        $product->price = $request['price'];
        $product->purl = $request['url'];
        $product->onSale = $request['sale'] ?? 0;
        $product->new_price = $request['new_price'] ?? null;  
        $product->save();
        Session::flash('tosterPos', 'toast-top-center');
        Session::flash('sm', 'Product update');
    }

}