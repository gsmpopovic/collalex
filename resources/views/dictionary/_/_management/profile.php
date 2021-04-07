<?php   include 'usermanagement/accesscontrol.php';
        include 'includes/variables.php'; ?>
<!DOCTYPE html>
<html>
<head>
<?php include 'includes/metasandlinks.php'; ?>
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
<!-- Site wrapper -->
<div class="wrapper">

<?php   include 'includes/nav_top.php'; 
        include 'includes/nav_side.php';
        include 'functions.php';
?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
<?php

if (isset($_POST['submit']))
{
        $sql_info = "UPDATE users SET 
                        first_name='".$_POST['inputNameFirst']."',
                        middle_name='".$_POST['inputNameMiddle']."',
                        last_name='".$_POST['inputNameLast']."',
                        email='".$_POST['inputEmail']."',
                        password='".$_POST['inputPassword']."',
                        position='".str_replace("'","’",$_POST['inputPosition'])."',
                        institution='".str_replace("'","’",$_POST['inputInstitution'])."',
                        bio='".str_replace("'","’",$_POST['inputBio'])."',
                        testimonial='".str_replace("'","’",$_POST['inputTestimonial'])."'
                        WHERE username='".$uid."' LIMIT 1";
        $rslt = mysql_query($sql_info);
        if ($rslt) {alert('success','fas fa-check','Success!','Profile updated.','off');
            $to = "jarrette@alumni.lsu.edu";
            $subject = "Somebody updated their profile.";
            $txt = $_POST['inputNameFirst']." updated their profile";
            $headers = "From: jarrette@alumni.lsu.edu";
            
            mail($to,$subject,$txt,$headers);
        }
        else {alert('danger','fas fa-exclamation-circle','Error!','Something went wrong. Try again.','off');}
}

        
    	$query_info = @mysql_query("SELECT * FROM users WHERE username='".$uid."' LIMIT 1") or die(mysql_error());
        $result = mysql_fetch_array($query_info);

?>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="/_assets/images/<?php   echo $result['username']; ?>-160.jpg"
                       alt="No profile picture uploaded">
                </div>

                <h3 class="profile-username text-center">
                    <?php   echo $result['first_name'].' '.$result['middle_name'].' '.$result['last_name']; ?>
                </h3>

                <p class="text-muted text-center"><strong>username:</strong> <?php echo $result['username']; ?></p>
                <p class="text-muted text-center"><?php echo $result['title']; ?></p>
                <p class="text-muted text-center"><?php echo $result['email']; ?></p>
                <?php if ($result['committee']==1) {echo '<p class="text-muted text-center">Member of the MTB Committee</p>';} ?>
                <p class="text-muted text-center"><?php echo $result['position'].',<br>'.$result['institution']; ?></p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                  <li class="nav-item"><a class="nav-link" href="#other1" data-toggle="tab">Other1</a></li>
                  <li class="nav-item"><a class="nav-link" href="#other2" data-toggle="tab">Other2</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                  
                  
                <div class="tab-content">
                  <div class="tab-pane active" id="settings">
                    <form class="form-horizontal" action="?action=update" method="POST">
                        
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">[First] [Middle] [Last] Name</label>
                        <div class="col-sm-3">
                          <input name="inputNameFirst" type="text" class="form-control" id="inputNameFirst" placeholder="First Name" value="<?php echo $result['first_name']; ?>" maxlength="50">
                        </div>
                        <div class="col-sm-3">
                          <input name="inputNameMiddle" type="text" class="form-control" id="inputNameMiddle" placeholder="Middle Name" value="<?php echo $result['middle_name']; ?>" maxlength="50">
                        </div>
                        <div class="col-sm-4">
                          <input name="inputNameLast"type="text" class="form-control" id="inputNameLast" placeholder="Last Name" value="<?php echo $result['last_name']; ?>" maxlength="50">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input name="inputEmail" type="email" class="form-control" id="inputEmail" placeholder="Email" value="<?php echo $result['email']; ?>" maxlength="50">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input name="inputPassword" type="password" class="form-control" id="password" placeholder="Password" value="<?php echo $result['password']; ?>" maxlength="50">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPosition" class="col-sm-2 col-form-label">[Position] [School]</label>
                        <div class="col-sm-4">
                          <input name="inputPosition" type="text" class="form-control" id="position" placeholder="Position" value="<?php echo $result['position']; ?>">
                        </div>
                        <div class="col-sm-6">
                          <input name="inputInstitution" type="text" class="form-control" id="institution" placeholder="Institution" value="<?php echo $result['institution']; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="bio" class="col-sm-2 col-form-label">Bio</label>
                        <div class="col-sm-10">
                          <textarea rows="8" name="inputBio" class="form-control" id="inputBio" placeholder="Tell the world a little more about yourself."><?php echo $result['bio']; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="testimonial" class="col-sm-2 col-form-label">Testimonial</label>
                        <div class="col-sm-10">
                          <textarea rows="8" name="inputTestimonial" class="form-control" id="inputTestimonial" placeholder="What does this project mean to you?"><?php echo $result['testimonial']; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger" name="submit">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="other1">[under construction]</div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="other2">[under construction]</div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
                
                
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include 'includes/nav_foot.php'; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
