@extends('admin/Layout.app')
@section('admin/title', 'Home Page Banner Item')
@section('admin/content')




<div class="row">
   
    <div class="col-md-6">

        <div class="card">
            <div class="card-header " style="background:#0062cc;">
                <h4 style="color:#fff">Banner Item </h4> 
            </div>
            <div class="card-body">  
                  
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Image</label>
                    <div class="col-sm-12 col-md-7">
                      <div id="image-preview" class="image-preview">
                        <label for="image-upload" id="image-label">Choose File</label>
                        <input  name="image" type="file" name="image" id="image-upload"/>
                      </div>
                    </div>
                  </div>  
        
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Title</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" id="care_title" name="care_title" class="form-control" > 
                      </div>
                    </div>  
        
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">short Description </label>
                      <div class="col-sm-12 col-md-7">  
                        <textarea id="care_short_desc" name="care_short_desc" class="summernote-simple"> </textarea> 
                      </div>
                    </div> 
        
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Second Title</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" id="care_sec_title" name="care_sec_title" class="form-control"> 
                      </div>
                    </div> 
        
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Description</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea id="care_sec_desc" name="care_sec_desc" class="summernote-simple"> </textarea> 
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Button Text</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" id="care_btn_text" name="care_btn_text" class="form-control" >
                      </div>
                    </div> 
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Button URL</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" id="care_btn_url" name="care_btn_url" class="form-control" >
                      </div>
                    </div> 
                    


                  <div class="banner-item-button">
                    <div class="form-group row mt-4 mb-4"> 
                      <div class="col-12">
                        <input style="width:100%" type="submit" onclick="homePageBannerItem()" class="btn btn-primary banner_items-btn" value="Add Item">
                      </div>
                    </div>
                    <div id="success-msg">
                      <img width="200" height="200" src="https://cdn.dribbble.com/users/1283437/screenshots/4486866/checkbox-dribbble-looped-landing.gif" alt="">
                    </div> 
                  </div>
                    
            </div>
            
          </div>

      
    </div>  
    <div class="col-md-6">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center pt-4">
          <h4>Banner Item List</h4> 
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
              <thead>
                <tr>
                  <th>Image</th>  
                  <th>Title</th> 
                  <th>Date</th> 
                  <th>Action</th> 
                </tr>
              </thead>
              <tbody>
                @foreach ($allBannerItemData as $item)
                <tr>
                  <td> <img width="35" src="{{asset('public/'.$item->image_upload)}}"> </td>  
                  <td> {{$item->care_title}}  </td>    
                  <td>{{$item->created_at}}</td>
                  <td>
                    <div class="buttons">  
                        <a href="/administrator/home/delete-item/{{($item->id)}}" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a> 
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>  
   
@endsection


 