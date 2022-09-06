@extends('admin/Layout.app')
@section('admin/title', 'Edit Category')
@section('admin/content')
<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header d-flex">
              <h4>Category List</h4>
            </div>
            <style>
                .dataTables_length {
                    display: none;
                }
            </style>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Create At</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($allCatData as $allCatData)
                    <tr>
                      <td> {{$allCatData->Name}} </td>
                      <td> {{$allCatData->created_at}} </td>
                      <td>
                        @if ($allCatData->status == 'Published')
                            <div class="badge badge-success"> {{$allCatData->status}} </div>
                        @elseif ($allCatData->status == 'Draft')
                            <div class="badge badge-danger"> {{$allCatData->status}} </div>
                        @elseif ($allCatData->status == 'Pending')
                            <div class="badge badge-warning"> {{$allCatData->status}} </div>
                        @else 
                            <div class="badge badge-light"> {{$allCatData->status}} </div>
                        @endif
                      </td>
                      <td> 
                        <div class="buttons d-flex">
                            <a href=" /news/post-categories/edit/{{base64_encode($allCatData->id)}} " class="btn btn-icon  btn-primary"><i class="far fa-edit"></i></a>
                            <a href="/news/post-categories/delete/{{base64_encode($allCatData->id)}}" onclick="return confirm('are you sure?')" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></a>
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
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
                <div id="success-msg">
                  <img width="200" height="200" src="https://cdn.dribbble.com/users/1283437/screenshots/4486866/checkbox-dribbble-looped-landing.gif" alt="">
                </div>
                <div class="card-header">
                    <h4>Edit {{$Name}}</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input name="cat_name" required id="cat_name" type="text" class="form-control" value="{{$Name}}">
                    </div>
                   
                    <input type="hidden" id="cat_id" value="{{$cat_id}}">
               
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="cat_desc" id='cat_desc' class="form-control"> {{$description}} </textarea>
                    </div>
                    <div class="form-group ">
                        <label class="col-form-label ">Category</label>
                          <select name="cat_status" id="cat_status" class="form-control selectric">
                            <option selected value=" {{$status}} "> {{$status}}</option>
                            <option value="Published">Published</option>
                            <option value="Draft">Draft</option>
                            <option value="Pending">Pending</option>
                          </select>
                      </div>
                
                </div>
                <div class="card-footer text-right">
                    <button onclick="updateCatData()" class="btn btn-primary mr-1" >Update</button>
                </div>      
        </div>
    </div>
</div>
@endsection