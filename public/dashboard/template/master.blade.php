<!DOCTYPE html>
<html>
<head>
    @yield("dashboard.template.includes.meta")
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @yield("dashboard.template.includes.navbar")
  @yield("dashboard.template.includes.sidebar")


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        @yield("dashboard.template.includes.page-header")
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          @yield("content")
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @yield("dashboard.template.includes.footer")


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@yield("dashboard.template.includes.footerscripts")
</body>
</html>
