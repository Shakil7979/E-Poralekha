<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Models\VisitorModel;
use App\Models\homePageSettingsController;
use App\Models\post_table_model;
use App\Models\homeBannerModel;
use App\Models\domain_names;
use App\Models\homeAboutUsModel; 
use App\Models\home_banner_item;  
use App\Models\home_parents_comments_model;  
use App\Models\home_feature_model; 
use App\Models\home_services_model; 
use App\Models\header_settings_model; 
use App\Models\add_menu_model;
use App\Models\gallery_model; 
use App\Models\team_model; 

class HomeController extends Controller
{  
   function HomeIndex()
    {
        $allPostData = json_decode(post_table_model::where('status', '=', 'Publish')->get());
        $domain_names = json_decode(domain_names::all());
        $allBannerData = json_decode(homeBannerModel::all());
        $allAboutUsData = json_decode(homeAboutUsModel::all()); 
        $homeFeatureData = json_decode(home_feature_model::all()); 
        $headerSettingsData = json_decode(header_settings_model::all());
        $menuShow = json_decode(add_menu_model::all());
        $gelData = json_decode(gallery_model::all());
        $gelCat = json_decode(gallery_model::select('gal_cat')->get());
        $teamData = json_decode(team_model::all()); 
        $allHeadersData = header_settings_model::all();
        $bannerAllItemData = json_decode(home_banner_item::orderBy('id','desc')->take(3)->get());  
        $homeServicesData = json_decode(home_services_model::orderBy('id','desc')->take(8)->get());  
        $homeParentsCommentsData = json_decode(home_parents_comments_model::all());
        $allCatData = json_decode(post_table_model::where('status', '=', 'Publish')->get()); 

        // function returnUniqueProperty($array,$property) {
        //     $tempArray = array_unique(array_column($array, $property));
        //     $moreUniqueArray = array_values(array_intersect_key($array, $tempArray));
        //     return $moreUniqueArray;
        // } 
        // return $gelData; 

        return view('Home',[ 
            'allPostData'=> $allPostData,
            'domain_names'=> $domain_names,
            'allCatData'=> $allCatData,
            'allBannerData'=> $allBannerData,
            'allAboutUsData'=> $allAboutUsData,
            'bannerAllItemData'=> $bannerAllItemData,
            'homeParentsCommentsData'=> $homeParentsCommentsData,
            'homeFeatureData'=> $homeFeatureData,
            'homeServicesData'=> $homeServicesData,
            'headerSettingsData'=> $headerSettingsData,
            'menuShow'=> $menuShow,
            'gelCat'=> array_unique($gelCat, SORT_REGULAR),
            'gelData'=> $gelData,
            'teamData'=> $teamData,
            'allHeadersData'=> $allHeadersData,
        ]); 
    }
    
    // function topHeader()
    // { 
    //     $headerSettingsData = json_decode(header_settings_model::all()); 
    //     return view('layout/header',[  
    //         'headerSettingsData'=> $headerSettingsData,
    //     ]);
    // }
    function ServicesPage()
    {  
        $homeServicesData2 = json_decode(home_services_model::all()); 
        return view('Services',[  
            'homeServicesData2'=> $homeServicesData2
        ]);
    }
    function AboutPage()
    {
        return view('About');
    }
    function GalleryPage()
    { 
        $gelData = gallery_model::all();
           
        return view('Gallery',[ 
            'gelData'=> $gelData,
        ]); 
    } 
    function ContactPage()
    {
        return view('Contact');
    }
    function messagePage()
    {
        return view('message');
    }


    function singleServices($s_id)
    {    
        $servicesData = json_decode(home_services_model::where('id', '=', $s_id)->first()); 
        return view('singleServices',[
            'services_title'=>$servicesData->services_title,
            'services_desc'=>$servicesData->services_desc,
            'services_list1'=>$servicesData->services_list1,
            'services_list2'=>$servicesData->services_list2,
            'services_list3'=>$servicesData->services_list3,
            'services_img'=>$servicesData->services_img,
            'services_cat'=>$servicesData->services_cat,
            'created_at'=>$servicesData->created_at,
            'id'=>$s_id,  
        ]);
    }
}
 