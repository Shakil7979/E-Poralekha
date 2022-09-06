<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\site_settings_model;
use App\Models\header_settings_model;
use App\Models\add_menu_model;
use App\Models\footer_text_model;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class site_setting_controller extends Controller
{
    function siteSettingView(){ // view site setting 
        $allSiteSettingData = site_settings_model::all();
        if($allSiteSettingData->count() == 0){
            $website_title = "null";
            $website_logo = "null";
            $footer_logo = "null";
            $favicon_icon = "null";
        }
        else{
            foreach ($allSiteSettingData as $key) {
                $website_title = $key['website_title'];
                $website_logo = $key['website_logo'];
                $footer_logo = $key['footer_logo'];
                $favicon_icon = $key['favicon_icon'];
            }
        }
        return view('admin/siteSettings',[ 
            'website_title'=> $website_title,
            'website_logo'=> $website_logo,
            'footer_logo' => $footer_logo,
            'favicon_icon' => $favicon_icon
        ]);
    }

    function headers(){ 
        $allHeadersData = header_settings_model::all();
        return view('admin/headerSettings' ,[ 
            'allHeadersData'=> $allHeadersData, 
        ]);
    }
    function footers(){ 
        $footerTextData = footer_text_model::all();
        return view('admin/footerSettings',[ 
            'footerTextData'=> $footerTextData, 
        ] );
    }
 

    function updateSiteSetting(Request $req){ //update site setting 
        date_default_timezone_set("Asia/Dhaka");
        $dateTime = date("Y-m-d h:i:s");

        $website_title = $req->input('website_title');
        $website_logo = $req->file('website_logo'); 
        $footer_logo = $req->file('footer_logo'); 
        $favicon_icon = $req->file('favicon_icon');  
        
        $upload_path_string = 'images/upload/site_setting/';
        $upload_path = public_path($upload_path_string);
        // $website_logo_newname = time() . '.' . $req->website_logo->getClientOriginalExtension();
        $website_logo_newname = "website_logo" . '.' . $website_logo->getClientOriginalExtension();
        $footer_logo_newname = "footer_logo" . '.' . $footer_logo->getClientOriginalExtension();
        $favicon_icon_newname = "favicon_icon" . '.' . $favicon_icon->getClientOriginalExtension(); 

        $website_logo->move($upload_path, $website_logo_newname);
        $footer_logo->move($upload_path, $footer_logo_newname);
        $favicon_icon->move($upload_path, $favicon_icon_newname);

        $result = site_settings_model::where('id',1)->update([ 
            'website_title' => $website_title,
            'website_logo' => $upload_path_string.$website_logo_newname, 
            'footer_logo'=> $upload_path_string.$footer_logo_newname,
            'favicon_icon'=>$upload_path_string.$favicon_icon_newname,
            'update_at'=>$dateTime
        ]);
        if($result == true){
            return "success";
        }else{
            return "Fail";
        }
    } 
 
    function headerSettingsAdd(Request $req){ //insert news post 
        date_default_timezone_set("Asia/Dhaka");
        $dateTime = date("Y-m-d h:i:s");  

        $address = $req->input('address');  
        $email = $req->input('email');  
        $phone = $req->input('phone');  
        $facebook_url = $req->input('facebook_url');  
        $twitter_url = $req->input('twitter_url');  
        $instagram_url = $req->input('instagram_url');       
  
             
        $result = header_settings_model::where('id', 1)->update([
            'address'=>$address, 
            'email'=>$email, 
            'phone'=>$phone, 
            'facebook_url'=>$facebook_url, 
            'twitter_url'=>$twitter_url, 
            'instagram_url'=>$instagram_url,  
            'created_at'=>$dateTime
        ]); 
        if($result == true){
            return "success";
        }else{
            return "Fail";
        } 
    }
 
    function addMenuAdd(Request $req){ //insert news post 
        date_default_timezone_set("Asia/Dhaka");
        $dateTime = date("Y-m-d h:i:s");  

        $new_menu = $req->input('new_menu'); 

        $menu_count = count( add_menu_model::where('new_menu', '=', $new_menu)->get());  

        if($menu_count == 0){
            $menu_url = $req->input('menu_url');    
            $result = DB::table('add_menu')->insert([   
                'new_menu'=>$new_menu, 
                'menu_url'=>$menu_url,    
                'created_at'=>$dateTime
            ]); 
            if($result == true){
                return "success";
            }else{
                return "Fail";
            } 
        }else{
            return "Duplicate";
        }
       
    } 

    function footerInsert(Request $req){ //insert news post 
        date_default_timezone_set("Asia/Dhaka");
        $dateTime = date("Y-m-d h:i:s");  
        
   
        $st_day = $req->input('st_day');       
        $end_day = $req->input('end_day');    
        $o_start_time = $req->input('o_start_time');       
        $o_end_time = $req->input('o_end_time');       
        $copy_text = $req->input('copy_text');       
        $d_by_text = $req->input('d_by_text');       
        $d_by_url = $req->input('d_by_url');       
        $hosted_text = $req->input('hosted_text');       
        $hosted_com = $req->input('hosted_com');       
        $hosted_url = $req->input('hosted_url');    
             
        $result = footer_text_model::where('id', 1)->update([  
            'st_day'=>$st_day,  
            'end_day'=>$end_day,  
            'o_start_time'=>$o_start_time,  
            'o_end_time'=>$o_end_time,  
            'copy_text'=>$copy_text,  
            'd_by_text'=>$d_by_text,  
            'd_by_url'=>$d_by_url,  
            'hosted_text'=>$hosted_text,  
            'hosted_com'=>$hosted_com,  
            'hosted_url'=>$hosted_url,  
            'created_at'=>$dateTime
        ]); 
        if($result == true){
            return "success";
        }else{
            return "Fail";
        } 
    }
}
