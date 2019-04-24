<?php

namespace App\Http\Controllers;

use App\User;
use DB;
use Illuminate\Http\Request;
use Session;

class Users extends MainController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        self::$data['users'] = DB::table('users As u')->join('users_roles AS ur', 'ur.user_id', '=', 'u.id')->get()->toArray();
        return view('cms.users', self::$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        return view('cms.delete_user', self::$data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        if ($request['r'] == 'add') {
            $rid = 6;
        } elseif ($request['r'] == 'del') {
            $rid = 7;
        }
        DB::table('users_roles')->where('user_id', $id)->update(['role_id' => $rid]);
        Session::flash('sm', 'User\'s role changed');
        return redirect('cms/users');
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
        User::destroy($id);
        Session::flash('tosterPos', 'toast-top-center');
        Session::flash('sm', 'user deleted');
        return redirect('cms/users');
    }
}