<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Amin IT Newspapper - Login</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href=" {{asset('public/admin-assets/css/app.min.css')}} ">
  <link rel="stylesheet" href=" {{asset('public/admin-assets/bundles/izitoast/css/iziToast.min.css')}}">

  <link rel="stylesheet" href=" {{asset('public/admin-assets/bundles/bootstrap-social/bootstrap-social.css')}} ">
  <!-- Template CSS -->
  {{-- <link rel="stylesheet" href=" {{asset('public/admin-assets/css/style.css')}} "> --}}
  <link rel="stylesheet" href=" {{asset('public/admin-assets/css/components.css')}} ">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/">
  <link rel='shortcut icon' type='image/x-icon' href='assets/' /> 
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
  {{-- <link rel="stylesheet" href=" {{asset('public/admin-assets/css/custom.css')}} "> --}}
  <link rel='shortcut icon' type='image/x-icon' href=" {{asset('public/admin-assets/img/favicon.ico')}} ">
  <link rel="stylesheet" href="{{asset('public/admin-assets/css/login.css')}}">
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    {{-- <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Login</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="#" id="login-form" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Username</label>
                    <input id="username" required type="text" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your username
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                     
                    </div>
                    <input id="password" required type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>
    </section> --}} 
    <div class="main">  	
      <input type="checkbox" id="chk" aria-hidden="true">
  
        <div class="signup"> 
            <label for="chk" aria-hidden="true">ePoralekha</label>  
        </div>
  
        <div class="login">
          <form method="POST" action="#" id="login-form" >
            <label for="chk" aria-hidden="true">Login</label>
            <input id="username" required type="text" name="username" tabindex="1" required autofocus>
              <div class="invalid-feedback">
                Please fill in your username
              </div>
              <input id="password" required type="password" name="password" tabindex="2" required>
              <div class="invalid-feedback">
                please fill in your password
              </div>
            {{-- <input type="text" name="username" placeholder="User" required="">
            <input type="password" name="pswd" placeholder="Password" required=""> --}}
            <button>Login</button>
            <a href="{{('/')}}">Back to Website</a>
          </form>
        </div>
    </div> 


  </div>
  <!-- General JS Scripts -->
  <script src=" {{asset('public/admin-assets/js/app.min.js')}} "></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <script src=" {{asset('public/admin-assets/bundles/izitoast/js/iziToast.min.js')}} "></script>
  <!-- Template JS File -->
  <script src=" {{asset('public/admin-assets/js/scripts.js')}} "></script>
  <!-- axios js  -->
  <script src="{{asset('public/admin-assets/js/axios.min.js')}}"></script>
  <!-- Custom JS File -->
  <script src=" {{asset('public/admin-assets/js/custom.js')}} "></script>
  <script>
      $('#login-form').on('submit', function(e){
        e.preventDefault();
        var FormData = $(this).serializeArray();
        let username = FormData[0]['value'];
        let password = FormData[1]['value'];

        if(username == ""){
          iziToast.error({
            title: 'Username is Required!',
            position: 'topRight'
          });
        }
        else if(password == ""){
          iziToast.error({
            title: 'Password is Required!',
            position: 'topRight'
          });
        }
        else{
          var url = "/administrator/onAdminLogin";
          var data = {username:username, password:password};
          axios.post(url,data)
          .then(function(response){

            if(response.status==200 && response.data==1){
              iziToast.success({
                  title: 'Login Success',
                  position: 'topRight'
              });
              setTimeout(function(){
                window.location.href = "/administrator";
              },1000)
            }
            else{
              iziToast.error({
                title: 'Login Fail! Try again',
                position: 'topRight'
              });
            }

          })
          .catch(function (error){
              console.log(error);
          });


          
        }


      });
  </script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>