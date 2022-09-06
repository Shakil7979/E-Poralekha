@extends('admin/Layout.app')
@section('admin/title', 'Update Blog')
@section('admin/content')  
 
  

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header"> 
         
        </div>
        <div class="card-body"> 
 
         
          <div class="news_language_input en">
            
            <input type="hidden" id="post_id" value="{{$post_id}}">
 
            
           
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3"></label>
              <div class="col-sm-12 col-md-7">
                <input type="submit" onclick="sendDeletePostData()" class="btn btn-primary" value="Update">
              </div>
            </div>
            <div id="success-msg">
              <img width="200" height="200" src="https://cdn.dribbble.com/users/1283437/screenshots/4486866/checkbox-dribbble-looped-landing.gif" alt="">
            </div>

          </div>  
        </div>
      </div>
    </div>
  </div>
@endsection