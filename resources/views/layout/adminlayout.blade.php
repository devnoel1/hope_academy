<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ assets('/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{ assets('/img/favicon.png')}}">

    <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{asset('/css/bootstrap.min.css" rel="stylesheet')}}" />
  <link href="{{ asset('/css/paper-dashboard.css?v=2.0.0')}}" rel="stylesheet" />
 <link href="{{ asset('/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link href="{{ asset('/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="" onload="demo.showNotification('top','left')">
    @yield('content')



  <!--   Core JS Files   -->
  <script src="../js/jquery-3.2.1.min.js"></script>
  <script src="../js/core/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="../js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
    <script src="../demo/demo/demo.js"></script>
    <script src="../js/plugins/bootstrap-notify.js"></script>
    <script src="../js/form_Validate.js"></script>

    <?php include "change_psword.php";?>
      <?php include "chnge_img.php";?>
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
