<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Menu;
use Cookie;

class MainController extends Controller
{

    public static $data = [
        'pageTitle' => 'PhShop | ',
        'errors_top' => true,

    ];

    public function __construct()
    {

        self::$data['cat'] = Cookie::has('cat') ? Cookie::get('cat') : '';
        self::$data['menu'] = Menu::all()->toArray();
        self::$data['categories'] = Categorie::all()->toArray();

    }
}