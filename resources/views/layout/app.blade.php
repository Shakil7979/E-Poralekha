<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- page title -->
      <title>@yield('title')</title>
      <!-- Font files -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700%7CNunito:400,700,900" rel="stylesheet">
      <link href="fonts/flaticon.css" rel="stylesheet" type="text/css">
      <!-- Google Materalize fonts -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
      <!-- <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css"> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"   />
      <!-- Fav icons -->
      <link rel="apple-touch-icon" sizes="57x57" href="{{asset("apple-icon-57x57.png")}}">  
      <link rel="apple-touch-icon" sizes="72x72" href="{{asset("apple-icon-72x72.png")}}">
      <link rel="apple-touch-icon" sizes="114x114" href="{{asset("apple-icon-114x114.png")}}">
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/images\upload\site_setting\favicon_icon.png')}}">
      <!-- Bootstrap core CSS -->
      <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">
      <!-- style CSS -->
      <link href="{{asset('public/css/style.css')}}" rel="stylesheet">
      <!-- plugins CSS -->
      <link href="{{asset('public/css/plugins.css')}}" rel="stylesheet">
      <!-- Colors CSS -->
      <link href="{{asset('public/css/maincolors.css')}}" rel="stylesheet">
      <!-- LayerSlider CSS -->
      <link rel="stylesheet" href="{{asset('public/css/layerslider.css')}}">
      <!-- Switcher Only -->
      <link rel="stylesheet" id="switcher-css" type="text/css" href="{{asset('public/css/switcher.css')}}" media="all" />
      <!-- END Switcher Styles -->
      <!-- Demo Examples (For Module #3) -->
      <link rel="alternate stylesheet" type="text/css" href="{{asset('public/css/maincolors.css')}}" title="maincolors" media="all" />
      <link rel="alternate stylesheet" type="text/css" href="{{asset('public/css/kindergarten.css')}}" title="kindergarten" media="all" />
      <link rel="alternate stylesheet" type="text/css" href="{{asset('public/css/playtime.css')}}" title="playtime" media="all" />
      <link rel="alternate stylesheet" type="text/css" href="{{asset('public/css/preschool.css')}}" title="preschool" media="all" />
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-76370337-3"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-76370337-3');
      </script>
   </head>
   <!-- ==== body starts ==== -->
   <body id="top">
      @include('layout.header')
      @yield('content')
      @include('layout.footer')
      <!-- Bootstrap core & Jquery -->


      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="{{asset('public/js/jquery.min.js')}}"></script>
      <script src="{{asset('public/js/bootstrap.min.js')}}"></script> 
      <!-- Prefix free -->
      <script src="{{asset('public/js/prefixfree.min.js')}}"></script>
      <!-- Bootstrap Select Tool (For Module #4) -->
      <script src="{{asset('public/js/bootstrap-select.js')}}"></script>
      <!-- All Scripts & Plugins -->
      <script src="{{asset('public/js/dmss.js')}}"></script>
      <script src="{{asset('public/js/extrastyles.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.4/js.cookie.min.js"></script>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7ZJPV8"
         height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/js/flat-ui.min.js" integrity="sha512-GG/1z6B4MVJdQOw35lE4otrbjd2WYV+zhXgjUR+DTeaAc7s/ijgWsexEScSOIo8J4RlhC28CVerDjYQSH89ekQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- number counter script -->
      <script src="{{asset('public/js/counter.js')}}"></script>
      <!-- maps -->
      <script src="{{asset('public/js/map.js')}}"></script>
      <!-- GreenSock -->
      <script src="{{asset('public/js/greensock.js')}}"></script>
      <!-- LayerSlider script files -->
      <script src="{{asset('public/js/layerslider.transitions.js')}}"></script>
      <script src="{{asset('public/js/layerslider.kreaturamedia.jquery.js')}}"></script>
      <script src="{{asset('public/js/layerslider.load.js')}}"></script>
      <!-- Custom Js -->
      <script src="{{asset('public/js/plugins.js')}}"></script>
      <script src="{{asset('public/js/custom.js')}}"></script>
   </body>
</html>