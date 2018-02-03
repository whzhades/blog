<?php
/**
 * Created by PhpStorm.
 * User: whzhades
 * Date: 2018/2/3
 * Time: 12:22
 */

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
}