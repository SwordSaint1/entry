<?php require 'process/login.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sales | Viewer</title>
   <link rel="alternate icon" href="dist/img/TRS.ico" type="image/x-icon" />
   <link rel="icon" href="dist/img/TRS.png" type="image/x-icon" />

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="index_css/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="index_css/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="index_css/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">


 <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h1><b>Sales</b> | Viewer</h1>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="" method="POST" id="login_form">
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="username"  name="username" placeholder="Username" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
       
           <div class="input-group mb-3">
     
                        <select class="form-control" id="role"  name="role" >
                        <option value="">Select Role </option>
                    <option value="admin">Admin</option>
                    <option value="viewer">Viewer</option>
                  
                        </select>

                      
                        
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-tasks"></span>
            </div>
          </div>
        </div>

        <div class="social-auth-links text-center mt-2 mb-3">
            <button type="submit" class="btn btn-primary btn-block" name="login_btn" value="login">Sign In</button>

          </div>
      </form>
   

<!-- jQuery -->
<script src="index_css/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="index_css/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="index_css/dist/js/adminlte.min.js"></script>
</body>
</html>
