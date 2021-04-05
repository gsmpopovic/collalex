<?php include 'assets/variables.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Collapsed Sidebar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
<?php include 'assets/navbar.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<?php include 'assets/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Jarrette K. Allen's Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/index2.php">Dashboard</a></li>
			  <li class="breadcrumb-item">Management</li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- START MAIN CONTENT -->
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
                       src="images/profile-jarrette.jpg"
                       alt="No profile picture uploaded">
                </div>

                <h3 class="profile-username text-center">
                    Jarrette K. Allen                </h3>

                <p class="text-muted text-center"><strong>username:</strong> jarrette</p>
                <p class="text-muted text-center">Linguistic Consultant</p>
                <p class="text-muted text-center">jarrette@alumni.lsu.edu</p>
                <p class="text-muted text-center">Member of the MTB Committee</p>
				  
				  <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Projects</b><br>
                    <a href="#" class="btn btn-sm bg-info">
                      <i class="fas fa-globe-asia"></i> Bantayanon
                    </a>
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-user-check"></i> Admin
                    </a><br>
					  
                    <a href="#" class="btn btn-sm bg-info">
                      <i class="fas fa-users-cog"></i> CollaLex
                    </a>
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-user-check"></i> Admin
                    </a>
                  </li>
                  
                  
                </ul>
				  
                    
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
                          <input name="inputNameFirst" type="text" class="form-control" id="inputNameFirst" placeholder="First Name" value="Jarrette" maxlength="50">
                        </div>
                        <div class="col-sm-3">
                          <input name="inputNameMiddle" type="text" class="form-control" id="inputNameMiddle" placeholder="Middle Name" value="K." maxlength="50">
                        </div>
                        <div class="col-sm-4">
                          <input name="inputNameLast"type="text" class="form-control" id="inputNameLast" placeholder="Last Name" value="Allen" maxlength="50">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input name="inputEmail" type="email" class="form-control" id="inputEmail" placeholder="Email" value="jarrette@alumni.lsu.edu" maxlength="50">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input name="inputPassword" type="password" class="form-control" id="password" placeholder="Password" value="bfx2018" maxlength="50">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPosition" class="col-sm-2 col-form-label">[Position] [School]</label>
                        <div class="col-sm-4">
                          <input name="inputPosition" type="text" class="form-control" id="position" placeholder="Position" value="">
                        </div>
                        <div class="col-sm-6">
                          <input name="inputInstitution" type="text" class="form-control" id="institution" placeholder="Institution" value="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="bio" class="col-sm-2 col-form-label">Bio</label>
                        <div class="col-sm-10">
                          <textarea rows="8" name="inputBio" class="form-control" id="inputBio" placeholder="Tell the world a little more about yourself."></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="testimonial" class="col-sm-2 col-form-label">Testimonial</label>
                        <div class="col-sm-10">
                          <textarea rows="8" name="inputTestimonial" class="form-control" id="inputTestimonial" placeholder="What does this project mean to you?">It is such an honor for me to be a part of this project. The love that the Bantayanons have for their language is truly contagious! I am blessed to be able to play a part in its maintenance and preservation.</textarea>
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
<!-- END MAIN CONTENT -->

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

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
