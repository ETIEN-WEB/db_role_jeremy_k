<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return view('page.home');
    }

    public function user_register(){
        return view('users.register');
    }

    public function user_login(){
        return view('users.login');
    }

    public function admin_setting(){

        return 'admin_setting';
        //return view('page.admin_setting');
    }


    public function user_setting(){
        return 'user_setting';
        //view('page.user_setting');
    }
}
