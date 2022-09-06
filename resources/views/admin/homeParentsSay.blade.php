@extends('admin/Layout.app')
@section('admin/title', 'Home Page Parents Say')
@section('admin/content')

<div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header " style="background:#0062cc;">
          <h4 style="color:#fff">Parents Section</h4> 
        </div> 

        <div class="card-body">  
 
         <div class="form-group row mb-4">
            <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Parents Comments
            </label>
            <div class="col-sm-12 col-md-7">
                <textarea id="parents_comments" name="parents_comments" class="summernote-simple"></textarea>
            </div>
        </div>  

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Parents Image</label>
            <div class="col-sm-12 col-md-7">
              <div id="image-preview" class="image-preview">
                <label for="parents_img" id="image-label">Choose File</label>
                <input  name="image" type="file" name="parents_img" id="parents_img"  />
              </div>
            </div>
          </div>   

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Parents Name</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="parents_name" name="parents_name" class="form-control" value=""> 
              </div>
            </div>  

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Parents Designation</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="parents_desg" name="parents_desg" class="form-control" value=""> 
              </div>
            </div>  
 
            <div class="form-group row mt-4 mb-4"> 
              <div class="col-sm-12 col-md-7">
                <input type="submit" onclick="parentsAdd()" class="btn btn-primary" value="Add Comments">
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
          <h4>Parents Comments List</h4> 
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
              <thead>
                <tr>
                  <th>Image</th> 
                  <th>Name</th> 
                  <th>Designation</th> 
                  <th>Comments Date</th> 
                  <th>Action</th> 
                </tr>
              </thead>
              <tbody>
                @foreach ($homeParentsCommentsData as $item)
                <tr>
                  <td> <img width="35" src="{{asset('public/'.$item->parents_img)}}"> </td>  
                  <td> {{$item->parents_name}}  </td>
                  <td> {{$item->parents_desg}} </td>   
                  <td>{{$item->created_at}}</td>
                  <td>
                    <div class="buttons">  
                        <a href="/administrator/home/delete_comments/{{($item->id)}}" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a> 
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


 