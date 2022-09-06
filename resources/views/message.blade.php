@extends('layout.app')
@section('title', 'Message || ePoralekha')
@section('content')
<section class="section">
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1">
          <div class="login-brand text-center mb-3 mt-5"> 
            
            <a class="nav-brand" href="{{url('/')}}">
                <img src="{{asset('public/images\upload\site_setting\website_logo.png')}}" alt="" class="img-fluid">
                </a>
          </div>
          <div class="card card-primary">
            <div class="row m-0">
              <div class="col-12 p-0">
                <div class="card-header text-center"> 
                    Message sent successfully!
                </div> 
              </div>
              <div class="col-12 p-0 text-center" >
                <a href="{{('/')}}" class="btn btn-primary">Return Home Page</a>
              </div>
            </div>
          </div>
          <div class="simple-footer text-center mt-3">
            Copyright &copy; Otika 2018
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection