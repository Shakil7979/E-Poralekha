<?php

namespace App\Http\Controllers;
use App\Models\post_table_model;
use App\Models\category_table_model;
use App\Models\domain_names; 

use Illuminate\Http\Request;

class blogController extends Controller
{ 
    function allBlog()
    { 
        $allPostData = json_decode(post_table_model::where('status', '=', 'Publish')->get());
        $allPostCount = json_decode(post_table_model::where('status', '=', 'Publish')->get());
        $domain_names = json_decode(domain_names::all());
        $allCatData = json_decode(post_table_model::where('status', '=', 'Publish')->get()); 
        $catPostData = json_decode(post_table_model::select('catagories')->where('status', '=', 'Publish')->get()); 
 
        return view('Blog',[ 
            'allPostData'=> $allPostData,
            'domain_names'=> $domain_names,
            'allCatData'=> $allCatData, 
            'allPostCount'=> count($allPostCount), 
            'catPostData'=> array_unique($catPostData, SORT_REGULAR), 
        ]); 
    } 
    function catBlog($cat)
    { 
        $cat = str_replace('_',' ',$cat) ;
        $allPostData = json_decode(post_table_model::where('catagories', '=', $cat)->get());
        $allPostCount = json_decode(post_table_model::where('status', '=', 'Publish')->get());
        $domain_names = json_decode(domain_names::all());
        $allCatData = json_decode(post_table_model::where('status', '=', 'Publish')->get());  
        $catPostData = json_decode(post_table_model::select('catagories')->where('status', '=', 'Publish')->get()); 

        return view('Blog',[ 
            'allPostData'=> $allPostData,
            'domain_names'=> $domain_names,
            'allCatData'=> $allCatData,
            'allPostCount'=> count($allPostCount), 
            'catPostData'=> array_unique($catPostData, SORT_REGULAR), 
        ]);
 
    }
    function tagBlog($tag)
    { 
        $allPostData = json_decode(post_table_model::where('catagories', '=', $tag)->get());
        $domain_names = json_decode(domain_names::all());
        $allCatData = json_decode(post_table_model::where('status', '=', 'Publish')->get()); 
        return view('Blog',[ 
            'allPostData'=> $allPostData,
            'domain_names'=> $domain_names,
            'allCatData'=> $allCatData,
        ]);
 
    } 


    function singleBlog($post_id)
    {    
        $allPostData = json_decode(post_table_model::where('id', '=', $post_id)->first());
        $Admin_uri = domain_names::all();
        return view('SingleBlog',[
            'post_title'=>$allPostData->post_title,
            'post_id'=>$post_id, 
            'post_description'=>$allPostData->post_description,
            'post_thumbnail'=>$allPostData->post_thumbnail,
            'catagories'=>$allPostData->catagories,
            'post_tags'=>$allPostData->post_tags,
            'publish_at'=>$allPostData->public_date, 
            'Admin_uri'=> $Admin_uri[0]['Admin_uri'],
            'SERVER_PROTOCOL'=> $Admin_uri[0]['SERVER_PROTOCOL']
        ]);
    }
}
