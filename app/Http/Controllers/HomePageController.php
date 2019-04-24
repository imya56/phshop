<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use DB;
use App\HomeProduct;
use Session;

class HomePageController extends MainController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        self::$data['products'] = Product::rightJoin('home_products AS hp', 'products.id', '=', 'hp.product_id')
            ->rightJoin('categories AS c', 'c.id', '=', 'products.categorie_id')
            ->orderBy('hp.product_place', 'asc')
            ->get()->toArray();
        return view('cms.home_page_products', self::$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        self::$data['products'] = Product::all()->toArray();
        return view('cms.add_home_product', self::$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
                Session::put('sm', 'Product added');
                return redirect('cms/home-products');            
            }
            
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        self::$data['item_id'] = $id;
        return view('cms.delete_home_product', self::$data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        Session::flash('tosterPos', 'toast-top-center');
        Session::flash('sm', 'Item deleted');
        return redirect('cms/home-products');
    }
}