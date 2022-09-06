@extends('admin/Layout.app')
@section('admin/title', 'Home Page Settings | Banner section')
@section('admin/content')

@foreach ($allAboutUsData as $item) 
<div class="row">
    <div class="col-7">
      <div class="card">
        <div class="card-header " style="background:#0062cc;">
          <h4 style="color:#fff">About US Section </h4> 
        </div>


        <div class="card-body"> 
{{-- 
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">About Image </label>
            <div class="col-sm-12 col-md-7">
              <div id="image-preview" class="image-preview">
                <label for="banner_bg" id="image-label">Choose File</label>
                <input  name="image" type="file" name="about_img" id="about_img"  />
              </div>
            </div>
          </div>   --}}

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
            <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">About Section Title</label>
            <div class="col-sm-12 col-md-7"> 
                <input type="text" id="about_sec_title" name="about_sec_title" class="form-control" value="{{$item->about_sec_title}}"> 
              </div> 
          </div>  

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">About Section Paragraph</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="about_sec_pra" name="about_sec_pra" class="form-control" value="{{$item->about_sec_pra}}"> 
              </div>
            </div>  

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3"> About Title </label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="about_title" name="about_title" class="form-control" value="{{$item->about_title}}"> 
              </div>
            </div> 

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">About Content</label>
              <div class="col-sm-12 col-md-7">
                <textarea id="about_content" name="about_content" class="summernote-simple">{{$item->about_content}}</textarea>
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
 
            <div class="form-group row mt-4 mb-4"> 
              <div class="col-sm-12 col-md-7">
                <input type="submit" onclick="homeAboutUs()" class="btn btn-primary" value="change">
              </div>
            </div>
            <div id="success-msg">
              <img width="200" height="200" src="https://cdn.dribbble.com/users/1283437/screenshots/4486866/checkbox-dribbble-looped-landing.gif" alt="">
            </div>  
        </div>   
            
      </div>
    </div>
</div>
@endforeach
@endsection


 