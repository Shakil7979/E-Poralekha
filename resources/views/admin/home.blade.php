@extends('admin/Layout.app')
@section('admin/title', 'ePoralekha Admin Dashboard')
@section('admin/content')
<div class="row ">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="card">
        <div class="card-statistic-4">
          <div class="align-items-center justify-content-between">
            <div class="row ">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                <div class="card-content">
                  <h5 class="font-15">Total Blog</h5>
                  <h2 class="mb-3 font-18"> {{$total_post}} </h2>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                <div class="banner-img">
                  <img src=" {{asset('public/admin-assets/img/banner/1.png')}}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="card">
        <div class="card-statistic-4">
          <div class="align-items-center justify-content-between">
            <div class="row ">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                <div class="card-content">
                  <h5 class="font-15"> Students</h5>
                  <h2 class="mb-3 font-18"> 152 </h2>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                <div class="banner-img">
                  <img src=" {{asset('public/admin-assets/img/banner/5.png')}}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="card">
        <div class="card-statistic-4">
          <div class="align-items-center justify-content-between">
            <div class="row ">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                <div class="card-content">
                  <h5 class="font-15"> Teacher </h5>
                  <h2 class="mb-3 font-18"> 12 </h2>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                <div class="banner-img">
                  <img src=" {{asset('public/admin-assets/img/banner/2.png')}}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="card">
        <div class="card-statistic-4">
          <div class="align-items-center justify-content-between">
            <div class="row ">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                <div class="card-content">
                  <h5 class="font-15">Today Attendance </h5>
                  <h2 class="mb-3 font-18"> 89 </h2>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                <div class="banner-img">
                  <img src="{{asset('public/admin-assets/img/banner/3.png')}}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
</div>


<div class="row">
    <div class="col-md-6 col-lg-12 col-xl-6">
      <!-- Support tickets -->
      <div class="card">
        <div class="card-header">
          <h4>Today's Letest Blog</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Create At</th>
                </tr>
              </thead>
              <tbody>
                <?php $id = 1; ?>
                @foreach ($today_letest_post as $today_letest_post)
              
                <tr>
                  <td>{{$id++}}</td>
                  <td><a href="#"> {{$today_letest_post->post_title}} </a></td>
                  <td>{{$today_letest_post->created_at}} </td>
                </tr>

                @endforeach
               
                
              
              </tbody>
            </table> 
          </div>
        </div>
      </div>
      <!-- Support tickets -->
    </div>
    <div class="col-md-6 col-lg-12 col-xl-6">
      <!-- Support tickets -->
      <div class="card">
        <div class="card-header">
          <h4>Notice List</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Create At</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td><a href="#"> This Year Enjoy the Color of Festival with Amazing Holi Gifts Ideas </a></td>
                  <td>11-08-2018</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><a href="#"> This Year Enjoy the Color of Festival with Amazing Holi Gifts Ideas </a></td>
                  <td>11-08-2018</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><a href="#"> This Year Enjoy the Color of Festival with Amazing Holi Gifts Ideas </a></td>
                  <td>11-08-2018</td>
                </tr>
                 
              
              </tbody>
            </table> 
          </div>
        </div>
      </div>
      <!-- Support tickets -->
    </div>
    
    
  </div>
@endsection