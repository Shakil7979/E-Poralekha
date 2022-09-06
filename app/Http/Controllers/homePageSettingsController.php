<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\homeBannerModel;
use App\Models\home_banner_item; 
use App\Models\homeAboutUsModel; 
use App\Models\home_parents_comments_model; 
use App\Models\home_feature_model; 
use App\Models\home_services_model; 
use App\Models\gallery_model; 
use App\Models\team_model; 

class homePageSettingsController extends Controller
{
    // dashboard defoult value get 
    function bannerSection(){
        $allBannerData = json_decode(homeBannerModel::all()); 

        return view('admin/homePageBanner',[ 
            'allBannerData'=> $allBannerData
        ]);

    }
    // dashboard defoult value get 
    function bannerItem(){
        // $allBannerItemData = json_decode(home_banner_item::all());  
        $allBannerItemData = json_decode(home_banner_item::orderBy('id','desc')->take(3)->get());  

        return view('admin/homePageBannerItems',[
            'allBannerItemData'=> $allBannerItemData
        ]);

    } 
    // dashboard defoult value get 
    function aboutUs(){   
        $allAboutUsData = json_decode(homeAboutUsModel::all());  
        return view('admin/homeAboutUs ',[
            'allAboutUsData'=> $allAboutUsData
        ]);

    } 
    // dashboard defoult value get 
    function parentsSay(){       
        $homeParentsCommentsData = json_decode(home_parents_comments_model::all());  
        return view('admin/homeParentsSay',[
            'homeParentsCommentsData'=> $homeParentsCommentsData
        ]);

    } 
    // dashboard defoult value get 
    function features(){    
        $homeFeatureData = json_decode(home_feature_model::all());        
        return view('admin/homeFeatureSection',[
            'homeFeatureData'=> $homeFeatureData,
        ]);

    } 
    // dashboard defoult value get 
    function services(){      
        $homeServicesData = json_decode(home_services_model::orderBy('id','desc')->take(8)->get());  
        return view('admin/homeServicesSection',[
            'homeServicesData'=> $homeServicesData,
        ]);

    } 
    // dashboard defoult value get 
    function team(){      
        $teamData = json_decode(team_model::all());    
        return view('admin/homeTeam',[
            'teamData'=> $teamData,
        ]);

    } 
    // dashboard defoult value get 
    function gallery(){    
        $gel_data = json_decode(gallery_model::all()); 
        return view('admin/gallery',[
            'gel_data'=> $gel_data,
        ]);

    } 

    function teamDelete($t_id){ // delete post category
        $t_id = $t_id;
        $result = team_model::where('id',$t_id)->delete();
         if($result == true){
             return redirect('administrator/home/team');
         }
     }

    // front-end value show 
    function homeFront(){
        $allBannerData = json_decode(homeBannerModel::all());   
        $allAboutUsData = json_decode(homeAboutUsModel::all());   
        return view('Home',[ 
            'allBannerData'=> $allBannerData,
            'allAboutUsData'=> $allAboutUsData,
        ]);

    }

    function bannerSectionAdd(Request $req){ //insert news post 
        date_default_timezone_set("Asia/Dhaka");
        $dateTime = date("Y-m-d h:i:s");  

        $welcome_title = $req->input('welcome_title');  
        $banner_website_title = $req->input('banner_website_title');
        $banner_content = $req->input('banner_content'); 
        $button_text = $req->input('button_text');
        $button_url = $req->input('button_url');   

        $filePath = $req->file('FileKey');  
        $upload_path_string =  'public/images/upload/home/banner/bg/';
        $upload_path = public_path($upload_path_string); // upload path
        $fileName = time() . '.' . $filePath->getClientOriginalExtension(); //new name
        $filePath->move($upload_path, $fileName); // upload 

        
        $filePath2 = $req->file('bannerFile');  
        $upload_path_string2 =  'public/images/upload/home/banner/';
        $upload_path2 = public_path($upload_path_string2); // upload path
        $fileName2 = time() . '.' . $filePath2->getClientOriginalExtension(); //new name
        $filePath2->move($upload_path2, $fileName2); // upload 
        
        $result = homeBannerModel::where('id', 1)->update([
            'banner_bg'=> $upload_path_string.$fileName, 
            'banner_img'=> $upload_path_string2.$fileName2, 
            'welcome_title'=>$welcome_title,  
            'banner_website_title'=>$banner_website_title, 
            'banner_content'=>$banner_content,
            'button_text' => $button_text,
            'button_url'=>$button_url, 
            'created_at'=>$dateTime
        ]); 
        if($result == true){
            return "success";
        }else{
            return "Fail";
        } 
    }

    function bannerItemAdd(Request $req){ //insert news post 
        date_default_timezone_set("Asia/Dhaka");
        $dateTime = date("Y-m-d h:i:s");  
        
        // care 
        $care_title = $req->input('care_title');
        $care_short_desc = $req->input('care_short_desc'); 
        $care_sec_title = $req->input('care_sec_title'); 
        $care_sec_desc = $req->input('care_sec_desc'); 
        $care_btn_text = $req->input('care_btn_text'); 
        $care_btn_url = $req->input('care_btn_url');  


 
        $care_file = $req->file('care_file');  
        
        $upload_path_string = 'public/images/upload/home/banner/item/';
        $upload_path = public_path($upload_path_string); 
        $care_file_new = "care" . '.' . $care_file->getClientOriginalExtension(); 

        $care_file->move($upload_path, $care_file_new); 
        
        $result = DB::table('banner_item_table')->insert([  
            'image_upload'=> $upload_path_string.$care_file_new,  
            'care_title'=>$care_title, 
            'care_short_desc'=>$care_short_desc, 
            'care_sec_title'=>$care_sec_title, 
            'care_sec_desc'=>$care_sec_desc, 
            'care_btn_text'=>$care_btn_text,  
            'care_btn_url'=>$care_btn_url,  
            'created_at'=>$dateTime 
        ]); 
        if($result == true){
            return "success";
        }else{
            return "Fail";
        } 
    }



    function aboutUsAdd(Request $req){ //insert news post 
        date_default_timezone_set("Asia/Dhaka");
        $dateTime = date("Y-m-d h:i:s");  

        $about_sec_title = $req->input('about_sec_title');  
        $about_sec_pra = $req->input('about_sec_pra');
        $about_title = $req->input('about_title'); 
        $about_content = $req->input('about_content');
        $button_text = $req->input('button_text');
        $button_url = $req->input('button_url');   

        $filePath = $req->file('FileKey');  
        $upload_path_string =  'public/images/upload/home/about/';
        $upload_path = public_path($upload_path_string); // upload path
        $fileName = time() . '.' . $filePath->getClientOriginalExtension(); //new name
        $filePath->move($upload_path, $fileName); // upload   
        
        $result = homeAboutUsModel::where('id', 1)->update([
            'about_img'=> $upload_path_string.$fileName,  
            'about_sec_title'=>$about_sec_title,  
            'about_sec_pra'=>$about_sec_pra, 
            'about_title'=>$about_title,
            'about_content'=>$about_content,
            'button_text' => $button_text,
            'button_url'=>$button_url, 
            'created_at'=>$dateTime
        ]); 
        if($result == true){
            return "success";
        }else{
            return "Fail";
        } 
    }

    function parentsSayAdd(Request $req){ //insert news post 
        date_default_timezone_set("Asia/Dhaka");
        $dateTime = date("Y-m-d h:i:s");   

        $parents_comments = $req->input('parents_comments');  
        $parents_name = $req->input('parents_name');
        $parents_desg = $req->input('parents_desg');  

        $filePath = $req->file('FileKey');  
        $upload_path_string =  'public/images/upload/home/parents/';
        $upload_path = public_path($upload_path_string); // upload path
        $fileName = time() . '.' . $filePath->getClientOriginalExtension(); //new name
        $filePath->move($upload_path, $fileName); // upload   
        
        $result = DB::table('parents_comments_table')->insert([  
            'parents_img'=> $upload_path_string.$fileName,  
            'parents_comments'=>$parents_comments,  
            'parents_name'=>$parents_name, 
            'parents_desg'=>$parents_desg, 
            'created_at'=>$dateTime
        ]); 
        if($result == true){
            return "success";
        }else{
            return "Fail";
        } 
    }
    function parentsSayDelete($p_id){ // delete post category
        $p_id = $p_id;
        $result = home_parents_comments_model::where('id',$p_id)->delete();
         if($result == true){
             return redirect('/administrator/home/parents-say');
         }
     }


    function featuresAdd(Request $req){ //insert news post 
        date_default_timezone_set("Asia/Dhaka");
        $dateTime = date("Y-m-d h:i:s");    

        $feature_sec_title = $req->input('feature_sec_title');  
        $feature_sec_desc = $req->input('feature_sec_desc');
        // item 1 
        $f_item_1_icon = $req->input('f_item_1_icon'); 
        $f_item_1_title = $req->input('f_item_1_title');
        $f_item_1_desc = $req->input('f_item_1_desc'); 
        // item 2 
        $f_item_2_icon = $req->input('f_item_2_icon'); 
        $f_item_2_title = $req->input('f_item_2_title');
        $f_item_2_desc = $req->input('f_item_2_desc'); 
        // item 3 
        $f_item_3_icon = $req->input('f_item_3_icon'); 
        $f_item_3_title = $req->input('f_item_3_title');
        $f_item_3_desc = $req->input('f_item_3_desc'); 
        // item 4
        $f_item_4_icon = $req->input('f_item_4_icon'); 
        $f_item_4_title = $req->input('f_item_4_title');
        $f_item_4_desc = $req->input('f_item_4_desc'); 

        $filePath = $req->file('FileKey');  
        $upload_path_string =  'public/images/upload/home/feature/';
        $upload_path = public_path($upload_path_string); // upload path
        $fileName = time() . '.' . $filePath->getClientOriginalExtension(); //new name
        $filePath->move($upload_path, $fileName); // upload   
        
        $result = home_feature_model::where('id', 1)->update([
            'feature_sec_title'=>$feature_sec_title,  
            'feature_sec_desc'=>$feature_sec_desc,
            // item 1  
            'f_item_1_icon'=>$f_item_1_icon,
            'f_item_1_title'=>$f_item_1_title,
            'f_item_1_desc' => $f_item_1_desc, 
            // item 2  
            'f_item_2_icon'=>$f_item_2_icon,
            'f_item_2_title'=>$f_item_2_title,
            'f_item_2_desc' => $f_item_2_desc, 
            // item 3  
            'f_item_3_icon'=>$f_item_3_icon,
            'f_item_3_title'=>$f_item_3_title,
            'f_item_3_desc' => $f_item_3_desc, 
            // item 4  
            'f_item_4_icon'=>$f_item_4_icon,
            'f_item_4_title'=>$f_item_4_title,
            'f_item_4_desc' => $f_item_4_desc, 
            'feature_img'=> $upload_path_string.$fileName,  
        ]); 
        if($result == true){
            return "success";
        }else{
            return "Fail";
        } 
    }

    function servicesAdd(Request $req){ //insert news post 
        date_default_timezone_set("Asia/Dhaka");
        $dateTime = date("Y-m-d h:i:s");     

        $services_cat = $req->input('services_cat');  
        $services_title = $req->input('services_title');  
        $services_desc = $req->input('services_desc');  
        $services_list1 = $req->input('services_list1');  
        $services_list2 = $req->input('services_list2');  
        $services_list3 = $req->input('services_list3');  
        $button_text = $req->input('button_text');  
        $button_url = $req->input('button_url');  
        $parents_desg = $req->input('parents_desg');  
        $parents_desg = $req->input('parents_desg');  
        $parents_desg = $req->input('parents_desg');  

        $filePath = $req->file('FileKey');  
        $upload_path_string =  'public/images/upload/home/services/';
        $upload_path = public_path($upload_path_string); // upload path
        $fileName = time() . '.' . $filePath->getClientOriginalExtension(); //new name
        $filePath->move($upload_path, $fileName); // upload   
        
        $result = DB::table('home_services_table')->insert([    
            'services_img'=> $upload_path_string.$fileName,  
            'services_cat'=>$services_cat, 
            'services_title'=>$services_title, 
            'services_desc'=>$services_desc, 
            'services_list1'=>$services_list1, 
            'services_list2'=>$services_list2, 
            'services_list3'=>$services_list3, 
            'button_text'=>$button_text, 
            'button_url'=>$button_url,  
            'created_at'=>$dateTime
        ]); 
        if($result == true){
            return "success";
        }else{
            return "Fail";
        } 
    } 

    function galleryAdd(Request $req){ //insert news post 
        date_default_timezone_set("Asia/Dhaka");
        $dateTime = date("Y-m-d h:i:s");   

        $gal_cat = $req->input('gal_cat');    

        $filePath = $req->file('FileKey');  
        $upload_path_string =  'public/images/upload/home/gallery/';
        $upload_path = public_path($upload_path_string); // upload path
        $fileName = time() . '.' . $filePath->getClientOriginalExtension(); //new name
        $filePath->move($upload_path, $fileName); // upload   
        
        $result = DB::table('gallery_table')->insert([  
            'image_upload'=> $upload_path_string.$fileName,  
            'gal_cat'=>$gal_cat, 
            'create_at'=>$dateTime
        ]); 
        if($result == true){
            return "success";
        }else{
            return "Fail";
        } 
    } 
    function teamAdd(Request $req){ //insert news post 
        date_default_timezone_set("Asia/Dhaka");
        $dateTime = date("Y-m-d h:i:s");    

        $email = $req->input('email');    
        $facebook_url = $req->input('facebook_url');    
        $twitter_url = $req->input('twitter_url');    
        $linkedin_url = $req->input('linkedin_url');    
        $t_member_name = $req->input('t_member_name');    
        $designation = $req->input('designation');    
        $desc = $req->input('desc');        

        $filePath = $req->file('FileKey');  
        $upload_path_string =  'public/images/upload/home/team/';
        $upload_path = public_path($upload_path_string); // upload path
        $fileName = time() . '.' . $filePath->getClientOriginalExtension(); //new name
        $filePath->move($upload_path, $fileName); // upload  
        
        $result = DB::table('team_table')->insert([  
            'image_upload'=> $upload_path_string.$fileName,  
            'email'=>$email, 
            'facebook_url'=>$facebook_url, 
            'twitter_url'=>$twitter_url, 
            'linkedin_url'=>$linkedin_url, 
            't_member_name'=>$t_member_name, 
            'designation'=>$designation, 
            'desc'=>$desc,  
            'create_at'=>$dateTime
        ]); 
        if($result == true){
            return "success";
        }else{
            return "Fail";
        } 
    } 

}