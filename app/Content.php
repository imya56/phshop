<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;
 
class Content extends Model
{
/**
 *
 * Get all contents
 *
 * @param $url[string] content url
 * @param $data[array] array with all information for view
 * 
 * @return null
 *
 */
    public static function getAll($url, &$data) {
        $content = DB::table('contents AS c')
            -> join('menus AS m', 'm.id', '=', 'c.menu_id')
            -> where('m.url', '=', $url)
            -> select('m.title AS mtitle', 'c.*')
            -> get()
            -> toArray();

            if(! $content) {
               
                abort(404);
            } else {
                $data['pageTitle'] = $content[0] -> title;
                $data['content'] = $content;
            }
    }
/**
 *
 * Save a new content
 *
 * @param $request[Object] object from the class Request
 * @return null
 *
 */
    static public function save_new($request)
    {
        $content = new self;
        $content -> menu_id = $request['menu_id'];
        $content -> title = $request['title'];
        $content -> article = $request['article'];
        $content -> save();
        Session::flash('tosterPos', 'toast-top-full-width');
        Session::flash('tosterPos', 'toast-top-center');
        Session::flash('sm', 'Content saved');
    }
    /**
 *
 * Update category
 *
 * @param $request[Object] object from the class Request
 * @param $id[int] the id of updated content
 * 
 * @return null
 *
 */
    public static function update_item($request, $id){
        $content =self::find($id);
        $content -> menu_id = $request['menu_id'];
        $content -> title = $request['title'];
        $content -> article = $request['article'];
        $content -> save();
        Session::flash('tosterPos', 'toast-top-full-width');
        Session::flash('tosterPos', 'toast-top-center');
        Session::flash('sm', 'Content updated');
    }
}