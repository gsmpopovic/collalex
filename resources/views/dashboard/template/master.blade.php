<!DOCTYPE html>
<html>
<head>
    @include("dashboard.template.includes.meta")
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
<!-- Site wrapper -->
<div class="wrapper">

@include("dashboard.template.includes.sidebar")
@include("dashboard.template.includes.sidebar")

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        @include("dashboard.template.includes.page-header")
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

  @include("dashboard.template.includes.footer")


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include("dashboard.template.includes.footerscripts")
</body>
</html>
