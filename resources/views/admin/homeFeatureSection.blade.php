@extends('admin/Layout.app')
@section('admin/title', 'Home Feature Section')
@section('admin/content')

<style>
    .card-body .valid-feedback{
        display: block !important;
    }
</style>

<div class="row">
    <div class="col-md-7">
      <div class="card">
        <div class="card-header " style="background:#0062cc;">
          <h4 style="color:#fff">Feature Section</h4> 
        </div>

        @foreach ($homeFeatureData as $item)
            

        <div class="card-body">    

            <div class="form-group row mb-4">
                <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Feature Section Title</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" id="feature_sec_title" name="feature_sec_title" class="form-control" value="{{$item->feature_sec_title}}"> 
                </div>
              </div> 
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Feature Section Description</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" id="feature_sec_desc" name="feature_sec_desc" class="form-control" value="{{$item->feature_sec_desc}}"> 
                </div>  
              </div>    

            {{-- feature 1  --}}
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">feature Item 1 icon</label> 
              <div class="col-sm-12 col-md-7">
                <input type="text" id="f_item_1_icon" name="f_item_1_icon" class="form-control" value="{{$item->f_item_1_icon}}"> 
                <div class="valid-feedback">Must be use fontawsome icon class</div>
              </div>
            </div>  

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3"> feature Item 1 title </label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="f_item_1_title" name="f_item_1_title" class="form-control" value="{{$item->f_item_1_title}}"> 
              </div>
            </div> 
            
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3"> feature Item 1 description </label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="f_item_1_desc" name="f_item_1_title" class="form-control" value="{{$item->f_item_1_desc}}"> 
              </div>
            </div> 
            {{-- feature 2  --}}
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">feature Item 2 icon</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="f_item_2_icon" name="f_item_2_icon" class="form-control" value="{{$item->f_item_2_icon}}"> 
                <div class="valid-feedback">Must be use fontawsome icon class</div>
              </div>
            </div>  

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3"> feature Item 2 title </label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="f_item_2_title" name="f_item_2_title" class="form-control" value="{{$item->f_item_2_title}}"> 
              </div>
            </div> 
            
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3"> feature Item 2 description </label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="f_item_2_desc" name="f_item_2_title" class="form-control" value="{{$item->f_item_2_desc}}"> 
              </div>
            </div> 
            {{-- feature 3  --}}
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">feature Item 3 icon</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="f_item_3_icon" name="f_item_3_icon" class="form-control" value="{{$item->f_item_3_icon}}">
                <div class="valid-feedback">Must be use fontawsome icon class</div> 
              </div>
            </div>  

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3"> feature Item 3 title </label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="f_item_3_title" name="f_item_3_title" class="form-control" value="{{$item->f_item_3_title}}"> 
              </div>
            </div> 
            
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3"> feature Item 3 description </label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="f_item_3_desc" name="f_item_3_title" class="form-control" value="{{$item->f_item_3_desc}}"> 
              </div>
            </div> 
            {{-- feature 4  --}}
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">feature Item 4 icon</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="f_item_4_icon" name="f_item_4_icon" class="form-control" value="{{$item->f_item_4_icon}}"> 
                <div class="valid-feedback">Must be use fontawsome icon class</div>
              </div>
            </div>  

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3"> feature Item 4 title </label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="f_item_4_title" name="f_item_4_title" class="form-control" value="{{$item->f_item_4_title}}"> 
              </div>
            </div> 
            
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3"> feature Item 4 description </label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="f_item_4_desc" name="f_item_4_desc" class="form-control" value="{{$item->f_item_4_desc}}"> 
              </div>
            </div> 
            

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Feature Image</label>
            <div class="col-sm-12 col-md-7">
              <div id="image-preview" class="image-preview">
                <label for="feature_img" id="image-label">Choose File</label>
                <input  name="image" type="file" name="feature_img" id="feature_img"  />
              </div>
            </div>
          </div>

            <div class="form-group row mt-4 mb-4"> 
              <div class="col-sm-12 col-md-7">
                <input type="submit" onclick="featureChange()" class="btn btn-primary" value="change">
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


 