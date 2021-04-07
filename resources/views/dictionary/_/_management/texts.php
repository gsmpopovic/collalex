<?php include 'usermanagement/accesscontrol.php';

	  include 'includes/variables.php'; 

	  if (isset($_GET['textId'])) {$textId=$_GET['textId'];} else {$textId=0;} 

?>

<!DOCTYPE html>

<html lang="en">

<html>

<head>

<?php include 'includes/metasandlinks.php'; ?>

</head>

<body class="hold-transition sidebar-mini sidebar-collapse">

<!-- Site wrapper -->

<div class="wrapper">



<?php   include 'includes/nav_top.php'; 

        include 'includes/nav_side.php'; 

        include 'includes/functions.php'; ?>







  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1>Edit Texts</h1>

          </div>

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="index.php">Management Dashboard</a></li>

              <li class="breadcrumb-item active">Edit Texts</li>

            </ol>

          </div>

        </div>

      </div><!-- /.container-fluid -->

    </section>



<!-- Main content -->

    <section class="content">

      <div class="container-fluid">

        

        <div class="row">

          <div class="col-12 col-sm-12">

            <div class="card card-primary card-outline card-outline-tabs">

              <div class="card-header p-0 border-bottom-0">

                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">

                  <li class="nav-item">

                    <a class="nav-link active" id="custom-tabs-three-table-tab" data-toggle="pill" href="#custom-tabs-three-table" role="tab" aria-controls="custom-tabs-three-table" aria-selected="true"><i class="fas fa-table"></i> Texts needing content</a>

                  </li>

                  <li class="nav-item">

                    <a class="nav-link" id="custom-tabs-three-formatted-tab" data-toggle="pill" href="#custom-tabs-three-formatted" role="tab" aria-controls="custom-tabs-three-formatted" aria-selected="false"><i class="fas fa-paragraph"></i> Completed texts</a>

                  </li>

                  <li class="nav-item">

                    <a class="nav-link" id="custom-tabs-three-help-tab" data-toggle="pill" href="#custom-tabs-three-help" role="tab" aria-controls="custom-tabs-three-help" aria-selected="false"><i class="fas fa-info-circle"></i> Help</a>

                  </li>

                </ul>

              </div>

              <div class="card-body">

                <div class="tab-content" id="custom-tabs-three-tabContent">



<!--CODING FOR TABLE VIEW TAB-->

                  <div class="tab-pane fade show active" id="custom-tabs-three-table" role="tabpanel" aria-labelledby="custom-tabs-three-table-tab">

                            <?php   switch ($action)

                                    {

                                        case "edit":

                                            if (!empty($_POST))

                                            { 

                                                $bfx = $_POST['bfx'];

                                                $eng = $_POST['eng'];

                                                $ceb = $_POST['ceb'];

                                                $source = $_POST['source'];

                                                $comments = $_POST['comments'];

                                                $user_editor = $uid;

                                                

                                                $sql = "UPDATE texts SET 

                                                        bfx='".$bfx."',

                                                        eng='".$eng."',

                                                        ceb='".$ceb."',

                                                        source='".$source."',

                                                        comments='".$comments."',

                                                        user_editor='".$user_editor."'

                                                        WHERE id=".$textId." LIMIT 1";

                                                $result = mysql_query($sql);

                                                if ($result) { alert('success','fas fa-check-double','Success!','Text has been updated.','off');}

                                                else          { alert('danger','fas fa-exclamation-circle','Error!','Something went wrong. Text NOT updated. Try again.','off');}

                                                

                                                

                                                include 'texts_table.php';

                                            }



                                            else {include 'texts_form.php';}

                                            break;

                                            

                                        case "view":

                                            include 'texts_table.php';

                                            break;

                                            

                                        default:

                                            echo "default";

                                    }

                            ?>

                  </div>

<!--END CODING FOR TABLE VIEW TAB-->

<!--CODING FOR FORMATTED VIEW TAB-->

                  <div class="tab-pane fade" id="custom-tabs-three-formatted" role="tabpanel" aria-labelledby="custom-tabs-three-formatted-tab">

                        <div class="alert alert-warning">

                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                          <h5><i class="fas fa-tools"></i> Under construction</h5>

                        </div>

                  </div>

<!--END CODING FOR FORMATTED VIEW TAB-->

<!--CODING FOR HELP TAB-->

                  <div class="tab-pane fade" id="custom-tabs-three-help" role="tabpanel" aria-labelledby="custom-tabs-three-help-tab">

                        <div class="alert alert-warning">

                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                          <h5><i class="fas fa-tools"></i> Under construction</h5>

                        </div>

                  </div>

<!--END CODING FOR HELP TAB-->



                </div>

              </div>

              <!-- /.card -->

            </div>

          </div>

        </div>





      </div>

      <!-- /.container-fluid -->

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



<?php include 'includes/scripts.php'; ?>



</body>

</html>

