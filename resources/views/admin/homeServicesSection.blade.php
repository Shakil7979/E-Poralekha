
@extends('admin/Layout.app')
@section('admin/title', 'Home Services section')
@section('admin/content')

<div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header " style="background:#0062cc;">
          <h4 style="color:#fff">Services Section</h4> 
        </div>


        <div class="card-body">   

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3"> Services Category  </label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="services_cat" name="services_cat" class="form-control" > 
              </div>
            </div> 
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3"> Services Title  </label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="services_title" name="services_title" class="form-control" > 
              </div>
            </div> 

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Services Description</label>
              <div class="col-sm-12 col-md-7">
                <textarea id="services_desc" name="services_desc" class="summernote-simple"></textarea>
              </div>
            </div> 

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Services List 1</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="services_list1" name="services_list1" class="form-control" > 
              </div>
            </div> 
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Services List 2</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="services_list2" name="services_list2" class="form-control" > 
              </div>
            </div> 
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Services List 3</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="services_list3" name="services_list3" class="form-control" > 
              </div>
            </div> 

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Button Text</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="button_text" name="button_text" class="form-control" >
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Button URL</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="button_url" name="button_url" class="form-control" >
              </div>
            </div> 
            
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Services Image</label>
            <div class="col-sm-12 col-md-7">
              <div id="image-preview" class="image-preview">
                <label for="services_img" id="image-label">Choose File</label>
                <input  name="image" type="file" name="services_img" id="services_img"  />
              </div>
            </div>
          </div> 
 
            <div class="form-group row mt-4 mb-4"> 
              <div class="col-sm-12 col-md-7">
                <input type="submit" onclick="homeServices()" class="btn btn-primary" value="Add Servicess">
              </div>
            </div>
            <div id="success-msg">
              <img width="200" height="200" src="https://cdn.dribbble.com/users/1283437/screenshots/4486866/checkbox-dribbble-looped-landing.gif" alt="">
            </div>  
        </div>   
            
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center pt-4">
          <h4>Services List</h4> 
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
              <thead>
                <tr>
                  <th>Image</th> 
                  <th>Category</th> 
                  <th>Title</th> 
                  <th>Date</th> 
                  <th>Action</th> 
                </tr>
              </thead>
              <tbody>
                @foreach ($homeServicesData as $item)
                <tr>
                  <td> <img width="35" src="{{asset('public/'.$item->services_img)}}"> </td>  
                  <td> {{$item->services_cat}}  </td>
                  <td> {{$item->services_title}} </td>   
                  <td>{{$item->created_at}}</td>
                  <td>
                    <div class="buttons">  
                        <a href="/administrator/home/delete_services/{{($item->id)}}" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a> 
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







 