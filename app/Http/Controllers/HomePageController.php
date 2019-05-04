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
            ->select('hp.*','c.curl','products.purl', 'products.pimage', 'products.ptitle')
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
        HomeProduct::save_new($request);
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
        self::$data['homeProd'] = HomeProduct::find($id);
        self::$data['products'] = Product::all()->toArray();
        return view('cms.edit_home_product', self::$data);
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
        HomeProduct::destroy($id);
        Session::flash('tosterPos', 'toast-top-center');
        Session::flash('sm', 'Item deleted');
        return redirect('cms/home-products');
    }
}