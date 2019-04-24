<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Menu extends Model
{
 /**
 *
 * Save a new menu
 *
 * @param $request[Object] object from the class Request
 * @return null
 *
 */
    public static function save_new($request)
    {
        $menu = new self();
        $menu->link = $request['link'];
        $menu->url = $request['url'];
        $menu->title = $request['title'];
        $menu->save();
        Session::flash('tosterPos', 'toast-top-center');
        Session::flash('sm', 'Menu saved');
    }

 /**
 *
 * Update menu
 *
 * @param $request[Object] object from the class Request
 * @param $id[int] the id of updated menu
 * 
 * @return null
 *
 */
    static public function update_item($request, $id) 
    {
        $menu = self::find($id);
        $menu->link = $request['link'];
        $menu->url = $request['url'];
        $menu->title = $request['title'];
        $menu->save();
        Session::flash('tosterPos', 'toast-top-center');
        Session::flash('sm', 'Menu updated');
    }
}