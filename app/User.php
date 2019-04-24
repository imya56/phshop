<?php

namespace App;

use DB;
use Hash;
use Illuminate\Database\Eloquent\Model;
use Session;

class User extends Model
{
    public static function authUser($email, $password)
    {
        $auth = false;

        $user = DB::table('users AS u')
            ->join('users_roles AS ur', 'u.id', '=', 'ur.user_id')
            ->where('u.email', '=', $email)
            ->first();

        if ($user) {
            if (Hash::check($password, $user->password)) {
                $auth = true;
                if ($user->role_id == 6) {
                    Session::put('is_admin', true);

                }
                self::setSess($user, 'Welcome back, ' . $user->name);

            }
        }

        return $auth;
    }

    public static function save_new($request)
    {
        $user = new self();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->save();
        $uid = $user->id;
        DB::insert("INSERT INTO users_roles VALUES(null,$uid, 7)");
        self::setSess($user, 'you signup successfully, ' . $user->name);

    }

    private static function setSess($user, $sm)
    {
        Session::put('user_name', $user->name);
        Session::put('user_id', $user->id);
        Session::flash('tosterPos', 'toast-top-full-width');
        if ($sm) {
            Session::flash('tosterPos', 'toast-top-center');
            Session::flash('sm', $sm);
        }

    }

    public static function getLikes(&$data)
    {
        $id = Session::get('user_id');

        $likes = DB::table('wishlists')
            ->where('user_id', $id)
            ->select('product_id')
            ->get()
            ->toArray();

        $arr = [];

        foreach ($likes as $like) {
            $arr[] .= $like->product_id;
        }

        $data['likes'] = $arr;
    }

}