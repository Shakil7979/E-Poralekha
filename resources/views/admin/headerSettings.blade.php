



@extends('admin/Layout.app')
@section('admin/title', 'Create New Page')
@section('admin/content')
<div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4>Header Settings</h4>
         
        </div>
        <div class="card-body">  
          @foreach ($allHeadersData as $item)
              
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Address</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="address" name="address" class="form-control" value="{{$item->address}}"> 
              </div>
            </div>   

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Email</label>
              <div class="col-sm-12 col-md-7">
                <input type="email" id="email" name="email" class="form-control" value="{{$item->email}}"> 
              </div>
            </div>   

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Phone</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="phone" name="phone" class="form-control" value="{{$item->phone}}"> 
              </div>
            </div>   

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Facebook URL</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="facebook_url" name="facebook_url" class="form-control" value="{{$item->facebook_url}}"> 
              </div>
            </div>   
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Twitter URL</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="twitter_url" name="twitter_url" class="form-control" value="{{$item->twitter_url}}"> 
              </div>
            </div>   
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Instagram URL</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="instagram_url" name="instagram_url" class="form-control" value="{{$item->instagram_url}}"> 
              </div>
            </div>     
            
           
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3"></label>
              <div class="col-sm-12 col-md-7">
                <input type="submit" onclick="headerSettings()" class="btn btn-primary" value="Top Header Update">
              </div>
            </div>
            <div id="success-msg">
              <img width="200" height="200" src="https://cdn.dribbble.com/users/1283437/screenshots/4486866/checkbox-dribbble-looped-landing.gif" alt="">
            </div> 
          @endforeach
        </div> 
      </div>
    </div> 
  </div>
@endsection