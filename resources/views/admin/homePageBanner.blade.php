@extends('admin/Layout.app')
@section('admin/title', 'Home Page Settings | Banner section')
@section('admin/content')

<div class="row">
    <div class="col-7">
      <div class="card">
        <div class="card-header " style="background:#0062cc;">
          <h4 style="color:#fff">Banner Section</h4> 
        </div>


        <div class="card-body"> 
          
          @foreach ($allBannerData as $item) 

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Banner Background Image</label>
            <div class="col-sm-12 col-md-7">
              <div id="image-preview" class="image-preview">
                <label for="banner_bg" id="image-label">Choose File</label>
                <input  name="image" type="file" name="banner_bg" id="banner_bg"  />
              </div>
            </div>
          </div>  
          
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Banner Image</label>
            <div class="col-sm-12 col-md-7">
              <div id="image-preview" class="image-preview">
                <label for="banner_img" id="image-label">Choose File</label>
                <input  name="image" type="file" name="banner_img" id="banner_img"  />
              </div>
            </div>
          </div>  

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Welcome short Title</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="welcome_title" name="welcome_title" class="form-control" value="{{$item->welcome_title}}"> 
              </div>
            </div>  

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3"> Banner Website Title </label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="banner_website_title" name="banner_website_title" class="form-control" value="{{$item->banner_website_title}}"> 
              </div>
            </div> 

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Content (p)</label>
              <div class="col-sm-12 col-md-7">
                <textarea id="banner_content" name="banner_content" class="summernote-simple">{{$item->banner_content}}</textarea>
              </div>
            </div> 

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Button Text</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="button_text" name="button_text" class="form-control" value="{{$item->button_text}}">
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Button URL</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="button_url" name="button_url" class="form-control" value="{{$item->button_url}}">
              </div>
            </div>
            
            {{-- <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Status</label>
              <div class="col-sm-12 col-md-7">
                <select id="status" name="status" class="form-control selectric">
                  <option value="Publish">Publish</option>
                  <option value="Draft">Draft</option>
                  <option value="Pending">Pending</option>
                </select>
              </div>
            </div> --}}
 
            <div class="form-group row mt-4 mb-4"> 
              <div class="col-sm-12 col-md-7">
                <input type="submit" onclick="homeChange()" class="btn btn-primary" value="change">
              </div>
            </div>
            <div id="success-msg">
              <img width="200" height="200" src="https://cdn.dribbble.com/users/1283437/screenshots/4486866/checkbox-dribbble-looped-landing.gif" alt="">
            </div>  
        </div>  
        
        @endforeach
            
      </div>
    </div>
  </div>
@endsection


 