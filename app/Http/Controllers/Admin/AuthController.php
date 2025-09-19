<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    //
    function login_user(Request $request){
        if($request->post()){
            echo "hello";

        }
        return view('admin.login');
    }

    function register_user(Request $request){
        if($request->isMethod('post')){
            echo "hello";
        }
        return view('admin.register');

    }

    function loggeduser(){
        echo  "hello logged user ";
        // helo this is stage changes and hkjfhjdskfjsadlhf
    }

    function regsitered_user(){
        echo "hello user kjsdhfjadshfjlk";
    }
}
