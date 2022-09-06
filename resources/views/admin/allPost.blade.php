@extends('admin/Layout.app')
@section('admin/title', 'Blog List')
@section('admin/content') 
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center pt-4">
        <h4>Post List</h4>
        <a class="btn btn-outline-primary" href=" {{url('/administrator/news/create-post')}}">Add New Post</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
            <thead>
              <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Category</th>
                <th>Tags</th> 
                <th>Status</th> 
                <th>Publish date</th>
                <th>Create At</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($allPostData as $allPostData)
              <tr>
                <td> <img width="35" src="{{asset('public/'.$allPostData->post_thumbnail)}}"> </td> 
                <td> {{substr($allPostData->post_title,0,10)}} </td>
                <td> {{$allPostData->catagories}} </td>
                <td> {{$allPostData->post_tags}} </td>
                
                <td>
                  @if ($allPostData->status == 'Publish')
                      <div class="badge badge-success"> {{$allPostData->status}} </div>
                  @elseif ($allPostData->status == 'Draft')
                      <div class="badge badge-danger"> {{$allPostData->status}} </div>
                  @elseif ($allPostData->status == 'Pending')
                      <div class="badge badge-warning"> {{$allPostData->status}} </div>
                  @else 
                      <div class="badge badge-light"> {{$allPostData->status}} </div>
                  @endif
                </td> 
                <td>{{$allPostData->public_date}}</td>
                <td>{{$allPostData->created_at}}</td>
                <td>
                  <div class="buttons">
                      <a href="/administrator/news/update-post/edit/{{($allPostData->id)}}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a> 
                       
                      <a href="/administrator/news/delete-post/delete/{{($allPostData->id)}}" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a> 
                  </div></td>
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