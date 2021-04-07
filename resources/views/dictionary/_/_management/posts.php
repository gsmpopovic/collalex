<?php  include 'usermanagement/accesscontrol.php';
       include 'includes/variables.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/metasandlinks.php'; ?>

<!-- summernote -->
<link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">

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
            <h1>Website Posts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Website Posts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Main content -->
<?php 
    switch ($action) {
  case "view":
      include 'posts_table.php';
    break;
  case "form":
      $postId=$_GET['postId'];
      if (isset($_POST['submit']))
      {
          $page=$_POST['page'];
          $title=$_POST['title'];
          $subtitle=$_POST['subtitle'];
          $status=$_POST['status'];
          $content=$_POST['content'];
          $user_editor=$uid;
          if ($_POST['status']=="published") {$date_published=NOW();} else {$date_published=NULL;}
          
          $sql_info = "UPDATE posts SET 
                page='".$page."',
                title='".$title."',
                subtitle='".$subtitle."',
                status='".$status."',
                content='".$content."',
                user_editor='".$user_editor."',
                date_published='".$date_published."'
                WHERE id='".$postId."' LIMIT 1";
                
        $rslt = mysql_query($sql_info);
        if ($rslt) {alert('success','fas fa-check','Success!','Post updated.','off'); }
        else {alert('danger','fas fa-exclamation-circle','Error!','Something went wrong. Try again.','off');}
          
      }
      include 'posts_form.php';
    break;
  case "new":
      $postId=0;
      if (isset($_POST['submit']))
      {
          $page=$_POST['page'];
          $title=$_POST['title'];
          $subtitle=$_POST['subtitle'];
          $status=$_POST['status'];
          $content=$_POST['content'];
          $user_editor=$uid;
          if ($_POST['status']=="published") {$date_published=NOW();} else {$date_published=NULL;}
          
          $sql1 = "INSERT INTO posts (page, title, subtitle, status, content, user_editor)
                  VALUES ('$page', '$title', '$subtitle', '$status', '$content', '$user_editor')";
          $result1 = mysql_query($sql1);

          if ($result1) { $postId = mysql_insert_id();
                          alert('success','fas fa-check','Success!','Post created.','off'); }
          else {alert('danger','fas fa-exclamation-circle','Error!','Something went wrong. Try again.','off');}
          
      }
      include 'posts_form.php';
    break;
  default:
    echo "You did something wrong. Please use only the links on the site.";
}
?>
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
<?php include 'includes/scripts.php'; ?>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
  $(function () {
    $("#my_table").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
