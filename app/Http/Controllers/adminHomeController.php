<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorModel;
use App\Models\post_table_model;
use App\Models\domain_names;

class adminHomeController extends Controller
{
   function homeIndex(){
        date_default_timezone_set("Asia/Dhaka");
        $date = date("Y-m-d"); 

       $USER_IP = $_SERVER['REMOTE_ADDR'];
       date_default_timezone_set("Asia/Dhaka");
       $dateTime = date("Y-m-d h:i:sa");
       VisitorModel::insert(['ip_address'=>$USER_IP,'visited_date'=>$date, 'visited_time'=>$dateTime]);

      $total_post = post_table_model::count();
      $today_post = post_table_model::where('public_date','=',$date)->count();
      $total_visitor = VisitorModel::count();
      $today_visitor = VisitorModel::where('visited_date','=',$date)->count();

      $today_letest_post = json_decode(post_table_model::where('public_date','=',$date)->orderBy('id', 'desc')->get());
 
       
       return view('admin/home',[
           'total_post' => $total_post,
           'today_post' => $today_post,
           'total_visitor' => $total_visitor,
           'today_visitor' => $today_visitor,
           'today_letest_post'=>$today_letest_post
       ]);
   }
}
 