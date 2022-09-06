
@extends('admin/Layout.app')
@section('admin/title', 'Team section')
@section('admin/content')

<div class="row">  
    <div class="col-md-6">
      <div class="card">
        <div class="card-header " style="background:#0062cc;">
          <h4 style="color:#fff">Team Section</h4> 
        </div>


        <div class="card-body"> 

            <div class="form-group row mb-4">
                <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Team Member images</label>
                <div class="col-sm-12 col-md-7">
                  <div id="image-preview" class="image-preview">
                    <label for="image-upload" id="image-label">Choose File</label>
                    <input  name="image" type="file" name="image" id="image-upload"
                     />
                  </div>
                </div>
              </div> 
  
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Email</label>
              <div class="col-sm-12 col-md-7">
                <input type="email" id="email" name="email" class="form-control" value="#"> 
              </div>
            </div> 
  
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Facebook URL</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="facebook_url" name="facebook_url" class="form-control" value="#"> 
              </div>
            </div> 
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Twitter URL</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="twitter_url" name="twitter_url" class="form-control" value="#"> 
              </div>
            </div> 
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Linkedin URL</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="linkedin_url" name="linkedin_url" class="form-control" value="#"> 
              </div>
            </div> 
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Name</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="t_member_name" name="t_member_name" class="form-control" > 
              </div>
            </div> 
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Designation</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="designation" name="designation" class="form-control" > 
              </div>
            </div>  

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Description</label>
              <div class="col-sm-12 col-md-7">
                <textarea id="desc" name="desc" class="summernote-simple"></textarea>
              </div>
            </div>   
 
            <div class="form-group row mt-4 mb-4"> 
              <div class="col-sm-12 col-md-7">
                <input type="submit" onclick="homeTeam()" class="btn btn-primary" value="Add Servicess">
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
                  <th>Name</th> 
                  <th>Designation</th> 
                  <th>Date</th>  
                  <th>Action</th>  
                </tr>
              </thead>
              <tbody>
                @foreach ($teamData as $item)
                <tr>
                  <td> <img width="35" src="{{asset('public/'.$item->image_upload)}}"> </td>  
                  <td> {{$item->t_member_name}}  </td>
                  <td> {{$item->designation}} </td>   
                  <td>{{$item->create_at}}</td>
                  <td>
                    <div class="buttons">  
                        <a href="/administrator/home/delete-team/{{($item->id)}}" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a> 
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