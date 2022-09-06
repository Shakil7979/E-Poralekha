@extends('admin/Layout.app')
@section('admin/title', 'Create New Blog')
@section('admin/content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4>Gallery <code>.gallery-md</code></h4>
          </div>
          <div class="card-body">
            <div class="gallery gallery-md"> 
            @foreach ($gel_data as $item) 
              <div class="gallery-item" data-image="{{asset('public/'.$item->image_upload)}}" data-title="Image 1"></div>  
              @endforeach
              {{-- @php
              $newGelData = array();
                    array_push($newGelData, 's','f' );

                    print_r(array_unique($newGelData));
                @endphp  --}}
            </div>
          </div>
        </div>
    </div> 
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4>Add Gallery</h4>
        </div>
        <div class="card-body">  

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3"> Select Category </label>
              <div class="col-sm-12 col-md-7">
                <select id="gal_cat" name="gal_cat" class="form-control selectric">  
                    <option value="Our School">Our School</option>
                    <option value="Activities">Activities</option> 
                    <option value="Parents">Parents</option> 
                </select>
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
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3"></label>
              <div class="col-sm-12 col-md-7">
                <input type="submit" onclick="galleryAdd()" class="btn btn-primary" value="Create Post">
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