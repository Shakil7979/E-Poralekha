@extends('admin/Layout.app')
@section('admin/title', 'Update Page')
@section('admin/content')  
 
  

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Update Page Data</h4>
         
        </div>
        <div class="card-body"> 
 
         
          <div class="news_language_input en">
            
            <input type="hidden" id="post_id" value="{{$post_id}}">

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Title</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="post_title" name="post_title" class="form-control" value="{{$post_title}}"> 
              </div>
            </div> 
    
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3"> Menu </label>
              <div class="col-sm-12 col-md-7">
                <select id="category" name="category" class="form-control selectric">
                    @foreach ($allMenuData as $allMenuData)
                    <option value="{{$allMenuData->new_menu}}">{{$allMenuData->new_menu}}</option>
                  @endforeach      
                </select>
              </div>
            </div> 

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Publish at</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="publish_at" class="form-control datepicker" autocomplete="off" value="{{$publish_at}}">
              </div>
            </div>

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Content</label>
              <div class="col-sm-12 col-md-7">
                <textarea id="post_description" name="post_description" class="summernote-simple">{{$post_description}}</textarea>
              </div>
            </div>
            
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Thumbnail</label>
              <div class="col-sm-12 col-md-7">
                <div id="image-preview" class="image-preview">
                  <img src="{{asset('public/admin-assets/'.$post_thumbnail)}}" alt="">
                  <label for="image-upload" id="image-label">Choose File</label>
                  <input  name="image" type="file" name="image" id="image-upload" />
                </div>
              </div>
            </div> 

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Tags</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="tags" name="tags" class="form-control inputtags" value="{{$tags}} ">
              </div>
            </div>

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Status</label>
              <div class="col-sm-12 col-md-7">
                <select id="status" name="status" class="form-control selectric">
                  <option value="{{$status}}">{{$status}}</option>
                  <option value="Publish">Publish</option>
                  <option value="Draft">Draft</option>
                  <option value="Pending">Pending</option>
                </select>
              </div>
            </div>
            
           
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3"></label>
              <div class="col-sm-12 col-md-7">
                <input type="submit" onclick="sendUpdatePagetdata()" class="btn btn-primary" value="Update">
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