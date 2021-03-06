<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicon.png')}}">

    <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{ asset ('/css/paper-dashboard.css')}}" rel="stylesheet" />
 <link href="{{ asset('/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <style type="text/css">
        body{
            background-color: lightyellow;
        }
    </style>


</head>
<body>
    <div class="wrapper">
        <nav class="navbar navbar-dark navbar-absolute bg-danger navbar-expand-lg fixed-top">
            <div class="container">

                <a class="navbar-brand" href="std_dashboard.php?dash">Student Dashboard</a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">

                <ul class="navbar-nav ml-auto">
                <li class="nav-item btn-rotate dropdown">
                  <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="nc-icon nc-circle-10"></i>
                    <p>
                      <span class="d-lg-none d-md-block">Some Actions</span>
                    </p>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

                      <a class="dropdown-item" href="std_dashboard.php?profile">Profile</a>
                     <a class="dropdown-item" data-toggle="modal" data-target="#pswModal" href="#">Change Password</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../logout.php"><span><i class="nc-icon nc-user-run"></i></span> Logout</a>
                  </div>
                </li>

              </ul>
            </div>
          </div>
        </nav>
        <div class="container pt-5">
            <div class="row pt-5">
                @yield('content')
            </div>
        </div>
    </div>
  <!--   Core JS Files   -->
  <script src="{{ asset('/js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('/js/core/popper.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('/js/paper-dashboard.min.js?v=2.0.0')}}" type="text/javascript"></script>
    <script src="{{asset('/demo/demo/demo.js')}}"></script>
    <script src="{{asset('/js/plugins/bootstrap-notify.js')}}"></script>
    <script src="{{ asset('/js/form_Validate.js')}}"></script>

    {{-- <?php include "change_psword.php";?>
      <?php include "chnge_img.php";?> --}}

          <script type="text/javascript">
             $('.input-images').imageUploader();

              function checkPassport(){
                  var fileInput = document.getElementById('passport');
      var filePath = fileInput.value;
      var fileSize = fileInput.files[0].size;
      var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
      if(!allowedExtensions.exec(filePath)){
          document.getElementById('status').innerHTML ='<font class="text-danger">Please upload file having extensions PNG,JPG,JPEG,GIF only.</font>';


          if(document.getElementById('agree').checked){
              document.getElementById('btnSubmit').disabled=true;
          }else{
               document.getElementById('btnSubmit').disabled=true;
          }

          fileInput.value = '';

          return false;
      }else
          if(fileSize > 2097152){
              document.getElementById('status').innerHTML ='<font class="text-danger">file size should be at most 2MB.</font>';

          if(document.getElementById('agree').checked){
              document.getElementById('btnSubmit').disabled=true;
          }else{
               document.getElementById('btnSubmit').disabled=true;
          }
          }
             else{
          //Image preview
          if (fileInput.files && fileInput.files[0]) {
              var reader = new FileReader();
              reader.onload = function(e) {
                  document.getElementById('status').innerHTML ='';
                  document.getElementById('status').innerHTML = '<img width="150" height="150" src="'+e.target.result+'"/>';


          if(document.getElementById('agree').checked){
              document.getElementById('btnSubmit').disabled=true;
          }else{
               document.getElementById('btnSubmit').disabled=true;
          }
              };
              reader.readAsDataURL(fileInput.files[0]);
           }

          }
      }

  </script>
</body>
</html>
