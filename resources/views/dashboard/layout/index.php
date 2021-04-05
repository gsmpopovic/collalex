<?php include 'assets/variables.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Collapsed Sidebar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Suggestions to Review</p>
              </div>
              <div class="icon">
                <i class="ion ion-chatbubble-working"></i>
              </div>
              <a href="suggestions.php" class="small-box-footer">Review suggestions <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>10</h3>

                <p>New tasks to complete</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-checkmark-circle"></i>
              </div>
              <a href="tasks.php" class="small-box-footer">Complete tasks <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>3</h3>

                <p>New notifications</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-bell-outline"></i>
              </div>
              <a href="notifications.php" class="small-box-footer">Check notifications <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>3</h3>

                <p>Put something here</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        
        <!-- Explanation row -->
        
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
			<p>NOT A PRIORITY RIGHT NOW.</p>
            <p>The above box will indicate how many suggested words are ready to be reviewed.</p>
			<p>Do we create a <b>suggestions.php</b> file for that?</p>
			<p>color and icon should match the suggestions icon at the top right navbar</p>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
			<p>NOT A PRIORITY RIGHT NOW.</p>
            <p>The above box will indicate how many tasks are ready to be completed.</p>
			<p>Do we create a <b>tasks.php</b> file for that?</p>
			<p>color and icon should match the suggestions icon at the top right navbar</p>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
			<p>NOT A PRIORITY RIGHT NOW.</p>
            <p>The above box will indicate how many notifications are ready to be completed.</p>
			<p>What types of things should show up as notifications?</p>
			<p>Do we create a <b>notifications.php</b> file for that?</p>
			<p>color and icon should match the suggestions icon at the top right navbar</p>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
			<p>NOT A PRIORITY RIGHT NOW.</p>
            <p>Use of this box TBD</p>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row (explanation row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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
