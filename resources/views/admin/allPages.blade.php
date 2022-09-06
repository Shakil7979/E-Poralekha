@extends('admin/Layout.app')
@section('admin/title', 'Blog List')
@section('admin/content') 
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center pt-4">
        <h4>Pages List</h4>
        <a class="btn btn-outline-primary" href=" {{url('/administrator/news/create-page')}}">Add New Page</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
            <thead>
              <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Menu Name</th>
                <th>Tags</th> 
                <th>Status</th> 
                <th>Publish date</th>
                <th>Create At</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($allPagesData as $allPagesData)
              <tr>
                <td> <img width="35" src="{{asset('public/'.$allPagesData->post_thumbnail)}}"> </td> 
                <td> {{substr($allPagesData->post_title,0,10)}} </td>
                <td> {{$allPagesData->catagories}} </td>
                <td> {{$allPagesData->post_tags}} </td>
                
                <td>
                  @if ($allPagesData->status == 'Publish')
                      <div class="badge badge-success"> {{$allPagesData->status}} </div>
                  @elseif ($allPagesData->status == 'Draft')
                      <div class="badge badge-danger"> {{$allPagesData->status}} </div>
                  @elseif ($allPagesData->status == 'Pending')
                      <div class="badge badge-warning"> {{$allPagesData->status}} </div>
                  @else 
                      <div class="badge badge-light"> {{$allPagesData->status}} </div>
                  @endif
                </td> 
                <td>{{$allPagesData->public_date}}</td>
                <td>{{$allPagesData->created_at}}</td>
                <td>
                  <div class="buttons">
                      <a href="/administrator/news/update-page/edit/{{($allPagesData->id)}}"  class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a> 
                       
                      <a href="/administrator/news/delete-page/delete/{{($allPagesData->id)}}" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>   
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
