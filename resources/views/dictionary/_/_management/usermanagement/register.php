<?php // signup.php
include("common.php");
include("db.php");

if (!isset($_POST['submitok'])):
    // Display the user signup form
    ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register as a new user</p>

      <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
          
        <div class="input-group mb-3">
          <input name="newid" type="text" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
          
        <div class="input-group mb-3">
          <input name="newfirst" type="text" class="form-control" placeholder="First name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
          
        <div class="input-group mb-3">
          <input name="newmiddle" type="text" class="form-control" placeholder="Middle name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
          
        <div class="input-group mb-3">
          <input name="newlast" type="text" class="form-control" placeholder="Last name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <input name="newemail" type="email" class="form-control" placeholder="Email address">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-8">
              <input type="reset" value="Reset Form" />
          </div>
          <!-- /.col -->
          
          <div class="col-4">
            <button type="submit" name="submitok" class="btn btn-primary btn-block">Register</button>
          </div>
          
          <!-- /.col -->
        </div>
      </form>

      <a href="../index.php" class="text-center">I am already registered</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>

    <?php
else:
    // Process signup submission
    dbConnect('jarrett1_bantayanon.ph');

    if ($_POST['newid']=='' or $_POST['newfirst']==''
      or $_POST['newemail']=='') {
        error('One or more required fields were left blank.\\n'.
              'Please fill them in and try again.');
    }
    
    // Check for existing user with the new id
    $sql = "SELECT COUNT(*) FROM users WHERE username = '$_POST[newid]'";
    $result = mysql_query($sql);
    if (!$result) {	
        error('A database error occurred in processing your '.
              'submission.\\nIf this error persists, please '.
              'contact jarrette@jarrette.alumni.edu.');
    }
    if (mysql_result($result,0,0)>0) {
        error('A user already exists with your chosen username.\\n'.
              'Please try another.');
    }
    
    $newpass = substr(md5(time()),0,6);
    
    $sql = "INSERT INTO users SET
              username = '$_POST[newid]',
              password = '$_POST[password]',
              first_name = '$_POST[newfirst]',
              middle_name = '$_POST[newmiddle]',
              last_name = '$_POST[newlast]',
              email = '$_POST[newemail]'";
    if (!mysql_query($sql))
        error('A database error occurred in processing your '.
              'submission.\\nIf this error persists, please '.
              'contact jarrette@jarrette.alumni.edu.\\n' . mysql_error());
              
    // Email the new password to the person.
    $message = "G'Day!

Your personal account for the Project Web Site
has been created! To log in, proceed to the
following address:

    http://www.bantayanon.ph/dictionary/management

Your personal login ID and password are as
follows:

    userid: $_POST[newid]
    password: $newpass

You aren't stuck with this password! Your can
change it at any time after you have logged in.

If you have any problems, feel free to contact me at
<you@example.com>.

-Your Name
 Your Site Webmaster
";

    
         
    ?>
    <!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <title> Registration Complete </title>
      <meta http-equiv="Content-Type"
        content="text/html; charset=iso-8859-1" />
    </head>
    <body>
    <p><strong>User registration successful!</strong></p>
    <p>Your userid and password have been emailed to
       <strong><?=$_POST['newemail']?></strong>, the email address
       you just provided in your registration form. To log in,
       click <a href="protectedpage.php">here</a> to return to the login
       page, and enter your new personal userid and password.</p>
    </body>
    </html>
    <?php
endif;
?>

