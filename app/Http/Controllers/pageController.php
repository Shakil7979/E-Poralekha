<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request; 
use App\Models\add_menu_model;
use App\Models\page_model;
use App\Models\header_settings_model;
use App\Models\category_table_model;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
 

class pageController extends Controller
{
    //allPages
    function allPages(){ 
        $allMenuData = add_menu_model::all();
        $allPagesData = page_model::all();
        return view('admin/allPages',[ 
            'allMenuData'=> $allMenuData,
            'allPagesData'=> $allPagesData,
        ]);
    }
    function createPage(){ 
        $allMenuData = add_menu_model::all();
        return view('admin/createPage',[ 
            'allMenuData'=> $allMenuData
        ]);
    }
    function menuDelete($menu_id){ 
        $cat_id = base64_decode($menu_id);
        $result = add_menu_model::where('id',$menu_id)->delete();
        if($result == true){
            return redirect('/administrator/news/create-page');
        }
    } 
    function insertPage(Request $req){ //insert news post 
        date_default_timezone_set("Asia/Dhaka");
        $dateTime = date("Y-m-d h:i:s");
 
        $post_name = $req->input('post_title');  
        $category = $req->input('category');
        $post_description = $req->input('post_description'); 
        $status = $req->input('status');
        $publish_at = $req->input('publish_at'); 
        $tags = $req->input('tags'); 

        $filePath = $req->file('FileKey');  
        $upload_path_string = 'public/images/upload/pages/';
        $upload_path = public_path($upload_path_string); // upload path
        $fileName = time() . '.' . $filePath->getClientOriginalExtension(); //new name
        $filePath->move($upload_path, $fileName); // upload  

        $result= DB::table('page_table')->insert([  
            'post_title'=>$post_name,  
            'post_description'=>$post_description,
            'post_thumbnail'=> $upload_path_string.$fileName,  
            'status'=>$status,
            'public_date' => $publish_at,
            'catagories'=>$category,
            'post_tags'=>$tags,
            'created_at'=>$dateTime
        ]);
        if($result == true){
            return "success";
        }else{
            return "Fail";
        } 
    }


    function menuName($menu_name){ 
        $allPageData = page_model::where('catagories', '=', $menu_name)->get();  

        foreach ($allPageData as $key) {
            return view('allPagesData',[  
                'post_title'=>$key->post_title, 
                'post_description'=>$key->post_description,
                'post_thumbnail'=>$key->post_thumbnail,
                'catagories'=>$key->catagories,
                'post_tags'=>$key->post_tags,
                'publish_at'=>$key->public_date, 
            ]);
        } 


    }
    function updatePage($post_id){ //create post route 
        $allPostData = json_decode(page_model::where('id', '=', $post_id)->first());
        $allCatData = json_decode(category_table_model::all()); 
        $allMenuData = add_menu_model::all();
        // return $allPostData;
        
        return view('admin/updatePage',[
            'post_title'=>$allPostData->post_title,
            'post_id'=>$post_id, 
            'post_description'=>$allPostData->post_description,
            'post_thumbnail'=>$allPostData->post_thumbnail,
            'publish_at'=>$allPostData->public_date,
            'status'=>$allPostData->status,
            'tags'=>$allPostData->post_tags,
            'allCatData' =>$allCatData,  
            'allMenuData' =>$allMenuData,  
        ]);
    }
    function updatePageInsert(Request $req){ // update post data axios
       
        $post_id = $req->input('id'); 
        $post_title = $req->input('post_title');   
        $post_description = $req->input('post_description'); 
        $publish_at = $req->input('publish_at');  
        $category = $req->input('category');
        $status = $req->input('status'); 
        $tags = $req->input('tags'); 

        $filePath = $req->file('FileKey'); 
        $upload_path_string = 'public/images/upload/pages/';
        $upload_path = public_path($upload_path_string); // upload path
        $fileName = time() . '.' . $filePath->getClientOriginalExtension(); //new name
        $filePath->move($upload_path, $fileName); // upload


        $result = page_model::where('id',$post_id)->update([
            'post_title' => $post_title, 
            'post_thumbnail'=> $upload_path_string.$fileName, 
            'post_description' => $post_description, 
            'catagories'=>$category,
            'post_tags'=>$tags,
            'public_date' => $publish_at, 
            'status' => $status, 
        ]);
        if($result == true){
            return "success";
        }else{
            return "Fail";
        }

    }
    function deletePage($post_id){ // delete post category
        $post_id = $post_id;
        $result = page_model::where('id',$post_id)->delete();
         if($result == true){
             return redirect('admin/news/pages');
         }
     }
 
}
