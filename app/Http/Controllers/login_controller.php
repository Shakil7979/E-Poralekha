<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin_table_model;

class login_controller extends Controller
{
    function adminLogin(){
        return view('/admin/login');
    }

    function onAdminLogin(Request $req){
       $username = $req->input('username');
       $password = $req->input('password');
       $userCount = admin_table_model::where('username','=',$username)->where('password','=',$password)->count();
       if($userCount == 1){
            $req->session()->put('single_user',$username);
           return 1;
           
       }
       else{
           return 0;
       }
    }

    function onAdminLogOut(Request $req){
        $req->session()->flush();
        return redirect('/administrator/login');

    }
}