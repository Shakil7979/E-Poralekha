<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\post_table_model;
use App\Models\category_table_model;
use App\Models\tags_table_model;
class post_controller extends Controller
{
    function allPostIndex(){ //post route
        $allPostData = json_decode(post_table_model::all());
        return view('admin/allPost',[ 
            'allPostData'=> $allPostData
        ]);
    }

    function createPost(){ //create post route 
        
        return view('admin/createPost');
    }  

    // cat show on create post input value 
    function postCategoriesShow(){ //post catagory route
        $allCatData = json_decode(category_table_model::all());
        return view('admin/createPost',[
            'allCatData'=>$allCatData
        ]);
    }

    function deletePost($post_id){ // delete post category
       $post_id = $post_id;
       $result = post_table_model::where('id',$post_id)->delete();
        if($result == true){
            return redirect('administrator/news/posts');
        }
    }


    function updatePost($post_id){ //create post route 
        $allPostData = json_decode(post_table_model::where('id', '=', $post_id)->first());
        $allCatData = json_decode(category_table_model::all()); 
        // return $allPostData;
        
        return view('admin/updatePost',[
            'post_title'=>$allPostData->post_title,
            'post_id'=>$post_id, 
            'post_description'=>$allPostData->post_description,
            'post_thumbnail'=>$allPostData->post_thumbnail,
            'publish_at'=>$allPostData->public_date,
            'status'=>$allPostData->status,
            'tags'=>$allPostData->post_tags,
            'allCatData' =>$allCatData,  
        ]);
    }  
    // function postCatShowUpdate(){ //post catagory route
    //     $allCatData = json_decode(category_table_model::all());
    //     return view('updatePost',[
    //         'allCatData'=>$allCatData
    //     ]);
    // }

    function insertPost(Request $req){ //insert news post 
        date_default_timezone_set("Asia/Dhaka");
        $dateTime = date("Y-m-d h:i:s");
 
        $post_name = $req->input('post_title');  
        $category = $req->input('category');
        $post_description = $req->input('post_description'); 
        $status = $req->input('status');
        $publish_at = $req->input('publish_at'); 
        $tags = $req->input('tags'); 

        $filePath = $req->file('FileKey');  
        $upload_path_string = 'public/images/upload/posts/';
        $upload_path = public_path($upload_path_string); // upload path
        $fileName = time() . '.' . $filePath->getClientOriginalExtension(); //new name
        $filePath->move($upload_path, $fileName); // upload  

        $result= DB::table('post_table')->insert([  
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

    function updatePostInsert(Request $req){ // update post data axios
       
        $post_id = $req->input('id'); 
        $post_title = $req->input('post_title');   
        $post_description = $req->input('post_description'); 
        $publish_at = $req->input('publish_at');  
        $category = $req->input('category');
        $status = $req->input('status'); 
        $tags = $req->input('tags'); 

        $filePath = $req->file('FileKey'); 
        $upload_path_string = 'public/images/upload/posts/';
        $upload_path = public_path($upload_path_string); // upload path
        $fileName = time() . '.' . $filePath->getClientOriginalExtension(); //new name
        $filePath->move($upload_path, $fileName); // upload


        $result = post_table_model::where('id',$post_id)->update([
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

    // cat show on create cat input value 
    function postCategories(){ //post catagory route
        $allCatData = json_decode(category_table_model::all());
        return view('admin/postCategories',[
            'allCatData'=>$allCatData
        ]);
    } 


    function insertCategory(Request $req){ //insert categories 
        date_default_timezone_set("Asia/Dhaka");
        $dateTime = date("Y-m-d h:i:s"); 
        $cat_name = $req->input('cat_name');
        $cat_desc = $req->input('cat_desc');
        $cat_status = $req->input('cat_status');
        $result= DB::table('catagory_table')->insert([ 
            'Name'=>$cat_name,
            'description'=>$cat_desc,
            'status'=>$cat_status,
            'created_at'=>$dateTime
        ]);
        if($result == true){
            return "success";
        }else{
            return "Fail";
        }
        
    }

    function editPostCategories($cat_id){ // edit post categories page
        $allCatData = json_decode(category_table_model::all());
        $singleCategoryData = category_table_model::where('id','=',base64_decode($cat_id))->get();
        foreach ($singleCategoryData as $key ) {
            $Name = $key['Name'];
            $description = $key['description'];
            $status = $key['status'];
        }
        return view('admin/editPostCategories',[
            'allCatData'=>$allCatData,
            'Name'=>$Name,
            'description'=>$description,
            'status'=>$status,
            'cat_id' => $cat_id
        ]);
    }

    function updateCategory(Request $req){ // update category data axios
        $cat_name = $req->input('cat_name');
        $cat_id = base64_decode($req->input('cat_id'));
        $cat_desc = $req->input('cat_desc');
        $cat_status = $req->input('cat_status');


        $result = category_table_model::where('id',$cat_id)->update([
            'Name' => $cat_name,
            'description' => $cat_desc, 
            'status'=>$cat_status
        ]);
        if($result == true){
            return "success";
        }else{
            return "Fail";
        }
    }
    
    function deletePostCategories($cat_id){ // delete post category
       $cat_id = base64_decode($cat_id);
       $result = category_table_model::where('id',$cat_id)->delete();
        if($result == true){
            return redirect('/administrator/news/post-categories');
        }
    }

    function postTags(){ //post tags route
        $allTagsData = json_decode(tags_table_model::all());
        return view('postTags',[
            'allTagsData'=>$allTagsData
        ]);
    }

    function insertTags(Request $req){ //insert tags 
        date_default_timezone_set("Asia/Dhaka");
        $dateTime = date("Y-m-d h:i:s");

        $tag_name = $req->input('tag_name');
        $tag_desc = $req->input('tag_desc');
        $tag_status = $req->input('tag_status');
        $result= DB::table('tag_table')->insert([
            'Name'=>$tag_name,
            'description'=>$tag_desc,
            'status'=>$tag_status,
            'created_at'=>$dateTime
        ]);
        if($result == true){
            return "success";
        }else{
            return "Fail";
        }
        
        
    }
}
