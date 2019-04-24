<?php

namespace App\Http\Controllers;

use App\Http\Requests\SigninRequest;
use App\Http\Requests\SignupRequest;
use App\User;
use Session;

class UserController extends MainController
{

    public function __construct()
    {
        parent::__construct();
        $this->middleware('authuser', ['except' => ['logout', 'item', 'products', 'home', 'getLikes']]);
    }

    public function getSignin()
    {

        self::$data['pageTitle'] .= 'Signin';
        return view('forms.signin', self::$data);

    }

    public function postSignin(SigninRequest $request)
    {

        if (User::authUser($request['email'], $request['password'])) {
            $rm = !empty($request['rn']) ? $request['rn'] : '/';
            return redirect($rm);
        } else {
            self::$data['pageTitle'] .= 'signin page';
            self::$data['authError'] = 'Wrong email or password';
            return view('forms.signin', self::$data);
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('user/signin');
    }

    public function getSignup()
    {
        self::$data['pageTitle'] .= 'Signup page';
        self::$data['errors_top'] = false;
        return view('forms.signup', self::$data);
    }
    public function postSignup(SignupRequest $request)
    {

        User::save_new($request);
        return redirect('/');

    }

}