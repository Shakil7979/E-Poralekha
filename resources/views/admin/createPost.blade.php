@extends('admin/Layout.app')
@section('admin/title', 'Create New Blog')
@section('admin/content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Add New Post</h4>
         
        </div>
        <div class="card-body"> 
          
          <div class="news_language_input en">
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Title</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="post_title" name="post_title" class="form-control"> 
              </div>
            </div>  

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3"> Category </label>
              <div class="col-sm-12 col-md-7">
                <select id="category" name="category" class="form-control selectric">
                  @foreach ($allCatData as $allCatData)
                    <option value="{{$allCatData->Name}}">{{$allCatData->Name}}</option>
                  @endforeach  
                </select>
              </div>
            </div>

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Publish at</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="publish_at" class="form-control datepicker" autocomplete="off">
              </div>
            </div>

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Content</label>
              <div class="col-sm-12 col-md-7">
                <textarea id="post_description" name="post_description" class="summernote-simple"></textarea>
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Thumbnail</label>
              <div class="col-sm-12 col-md-7">
                <div id="image-preview" class="image-preview">
                  <label for="image-upload" id="image-label">Choose File</label>
                  <input  name="image" type="file" name="image" id="image-upload" />
                </div>
              </div>
            </div> 

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Tags</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="tags" name="tags" class="form-control inputtags">
              </div>
            </div>
            
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Status</label>
              <div class="col-sm-12 col-md-7">
                <select id="status" name="status" class="form-control selectric">
                  <option value="Publish">Publish</option>
                  <option value="Draft">Draft</option>
                  <option value="Pending">Pending</option>
                </select>
              </div>
            </div>
            
           
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3"></label>
              <div class="col-sm-12 col-md-7">
                <input type="submit" onclick="sendNewsPostData()" class="btn btn-primary" value="Create Post">
              </div>
            </div>
            <div id="success-msg">
              <img width="200" height="200" src="https://cdn.dribbble.com/users/1283437/screenshots/4486866/checkbox-dribbble-looped-landing.gif" alt="">
            </div>
          </div>
          {{-- end English inputs  --}}
        </div>
      </div>
    </div>
  </div>
@endsection