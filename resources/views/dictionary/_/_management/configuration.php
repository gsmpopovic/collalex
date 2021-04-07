<?php   include 'usermanagement/accesscontrol.php';
        include 'includes/variables.php'; 
        if (isset($_GET['option'])) {$option = $_GET['option'];} else {$option = "select";}
?>
<!DOCTYPE html>
<html>
<head>
<?php include 'includes/metasandlinks.php'; ?>
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
<!-- Site wrapper -->
<div class="wrapper">

<?php   include 'includes/nav_top.php'; 
        include 'includes/nav_side.php'; ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Configuration of Settings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Configuration of Settings</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-2">
            <div class="card">
              <div class="card-body">
                <a href="?option=languages"><button type="button" class="btn btn-default btn-block">LANGUAGES</button></a>
                <a href="?option=headword fields"><button type="button" class="btn btn-default btn-block">HEADWORD FIELDS</button></a>
                <a href="?option=senses fields"><button type="button" class="btn btn-default btn-block">SENSES FIELDS</button></a>
                <a href="?option=syntactic categories"><button type="button" class="btn btn-default btn-block">SYNTACTIC CATEGORIES</button></a>
                <a href="?option=alphabetization"><button type="button" class="btn btn-default btn-block">ALPHABETIZATION</button></a>
                <a href="?option=user access control"><button type="button" class="btn btn-default btn-block">USER ACCESS CONTROL</button></a>
                <a href="?option=user access control"><button type="button" class="btn btn-default btn-block">PAGE TRANSLATION</button></a>
                <a href="?option=user access control"><button type="button" class="btn btn-default btn-block">LIST OF SOURCES</button></a>
                <a href="?option=user access control"><button type="button" class="btn btn-default btn-block">WORD LISTS</button></a>
              </div>
            </div>
          </div>
          <div class="col-10">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
				<strong><?php if ($option == "select") {echo 'PLEASE SELECT AN OPTION TO THE LEFT';} else {echo '<p>Place here the form to edit '.$option;}  ?></strong>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
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
