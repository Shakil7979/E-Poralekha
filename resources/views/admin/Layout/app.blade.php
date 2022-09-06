<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('admin/title')</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('public/admin-assets/css/app.min.css')}}">
  <!-- create page css  -->
  <link rel="stylesheet" href=" {{asset('public/admin-assets/bundles/izitoast/css/iziToast.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/admin-assets/bundles/bootstrap-daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{asset('public/admin-assets/bundles/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{asset('public/admin-assets/bundles/jquery-selectric/selectric.css')}}">  
  <link rel="stylesheet" href="{{asset('public/admin-assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('public/admin-assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('public/admin-assets/css/components.css')}}">
  {{-- clock font famaly --}}
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Orbitron'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Aldrich'>
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('public/admin-assets/css/custom.css')}}">
  <link rel="shortcut icon" href="{{asset('public/images\upload\site_setting\favicon_icon.png')}}">
</head>
<body>
    @include('admin/Layout.header')
    @yield('admin/content')
    @include('admin/Layout.footer')



<!-- General JS Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('public/admin-assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{asset('public/admin-assets/bundles/summernote/summernote-bs4.js')}}"></script>
  <script src="{{asset('public/admin-assets/bundles/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  
  <script src="{{asset('public/admin-assets/bundles/jquery-selectric/jquery.selectric.min.js')}}"></script>
  <script src="{{asset('public/admin-assets/bundles/upload-preview/assets/js/jquery.uploadPreview.min.js')}}"></script>
  <script src="{{asset('public/admin-assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
  <!--Post Page Specific JS File -->
  <script src="{{asset('public/admin-assets/js/page/posts.js')}}"></script>
  <!-- export datatable Specific JS File  -->
  <script src="{{asset('public/admin-assets/bundles/datatables/datatables.min.js')}}"></script>
  <script src="{{asset('public/admin-assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('public/admin-assets/bundles/datatables/export-tables/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('public/admin-assets/bundles/datatables/export-tables/buttons.flash.min.js')}}"></script>
  <script src="{{asset('public/admin-assets/bundles/datatables/export-tables/jszip.min.js')}}"></script>
  <script src="{{asset('public/admin-assets/bundles/datatables/export-tables/pdfmake.min.js')}}"></script>
  <script src="{{asset('public/admin-assets/bundles/datatables/export-tables/vfs_fonts.js')}}"></script>
  <script src="{{asset('public/admin-assets/bundles/datatables/export-tables/buttons.print.min.js')}}"></script>
  <script src="{{asset('public/admin-assets/bundles/jquery-ui/jquery-ui.min.js')}}"></script>
  <script src="{{asset('public/admin-assets/js/page/datatables.js')}}"></script>
  <script src="{{asset('public/admin-assets/bundles/chocolat/js/jquery.chocolat.min.js')}}"></script> 
  <script src="{{asset('public/admin-assets/js/page/gallery1.js')}}"></script> 
 

  <!-- create Page Specific JS File -->
    <script src="{{asset('public/admin-assets/js/page/create-post.js')}}"></script>
    <script src=" {{asset('public/admin-assets/bundles/izitoast/js/iziToast.min.js')}} "></script>
    <script src=" {{asset('public/admin-assets/js/sweetalert.min.js')}} "></script>
  <!-- Template JS File -->
  <script src="{{asset('public/admin-assets/js/scripts.js')}}"></script>
  <!-- axios js  -->
  <script src="{{asset('public/admin-assets/js/axios.min.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{asset('public/admin-assets/js/custom.js')}}"></script>
</body>
</html>