@extends('admin/Layout.app')
@section('admin/title', 'Footer Settings')
@section('admin/content')
<div class="row"> 
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4>Footer Settings</h4>
        </div>
        <div class="card-body">   
          @foreach ($footerTextData as $item) 

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Start Day</label>
            <div class="col-sm-12 col-md-7">
              <select id="st_day" name="st_day" class="form-control selectric">
                <option value="{{$item->st_day}}">{{$item->st_day}}</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>
              </select>
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">End Day</label>
            <div class="col-sm-12 col-md-7"> 
              <select id="end_day" name="end_day" class="form-control selectric">
                <option value="{{$item->end_day}}">{{$item->end_day}}</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>
              </select>
            </div>
          </div> 

            <div class="form-group mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Office Satrt Time</label>
              <input type="time" id="o_start_time" class="form-control" value="{{$item->o_start_time}}">
            </div>

            <div class="form-group mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Office End Time</label>
              <input type="time" id="o_end_time" class="form-control" value="{{$item->o_end_time}}">
            </div>
            
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Copyright Text</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="copy_text" name="copy_text" class="form-control" value="{{$item->copy_text}}"> 
              </div>
            </div>   
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Designed by text</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="d_by_text" name="d_by_text" class="form-control" value="{{$item->d_by_text}}"> 
              </div>
            </div>   
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Designed by URL</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="d_by_url" name="d_by_url" class="form-control" value="{{$item->d_by_url}}"> 
              </div>
            </div>   
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Hosted Text</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="hosted_text" name="hosted_text" class="form-control" value="{{$item->hosted_text}}"> 
              </div>
            </div>   
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Hosted Company</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="hosted_com" name="hosted_com" class="form-control" value="{{$item->hosted_com}}"> 
              </div>
            </div>   
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Hosted URL</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" id="hosted_url" name="hosted_url" class="form-control" value="{{$item->hosted_url}}"> 
              </div>
            </div>   

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3"></label>
              <div class="col-sm-12 col-md-7">
                <input type="submit" onclick="setFooterSettings()" class="btn btn-primary" value="Update Footer">
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