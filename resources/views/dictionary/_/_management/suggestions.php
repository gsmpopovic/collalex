<?php include 'usermanagement/accesscontrol.php';
	  include 'includes/variables.php'; ?>
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
            <h1>Review Suggestions</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Management Dashboard</a></li>
              <li class="breadcrumb-item active">Review Suggestions</li>
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
                    <a class="nav-link active" id="custom-tabs-three-table-tab" data-toggle="pill" href="#custom-tabs-three-table" role="tab" aria-controls="custom-tabs-three-table" aria-selected="true"><i class="fas fa-table"></i> Table view</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-formatted-tab" data-toggle="pill" href="#custom-tabs-three-formatted" role="tab" aria-controls="custom-tabs-three-formatted" aria-selected="false"><i class="fas fa-paragraph"></i> Formatted view</a>
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
                                        case "enterAsIs":
                                            enterAsIs($suggestionId);
                                            include 'suggestions_table.php';
                                            break;
                                            
                                        case "edit":
                                            if (!empty($_POST))
                                            { 
                                            $lx_bfx = $_POST['lx_bfx'];
                                            $lx = $_POST['lx'];
                                            $hm = 1;
                                            $ph_bfx = $_POST['ph_bfx'];
                                            $ps_eng = $_POST['ps_eng'];
                                            $g_eng = $_POST['g_eng'];
                                            $g_ceb = $_POST['g_ceb'];
                                            $g_hil = $_POST['g_hil'];
                                            $g_tgl = $_POST['g_tgl'];
                                            $d_eng = $_POST['d_eng'];
                                            $d_ceb = $_POST['d_ceb'];
                                            $d_hil = $_POST['d_hil'];
                                            $d_tgl = $_POST['d_tgl'];
                                            $is_eng = $_POST['is_eng'];
                                            $sd_eng = $_POST['sd_eng'];
                                            $co_eng = $_POST['co_eng'];
                                            $user = $_POST['user'];
                                            
                                            $countDuplicates=0;
                                            $query_info = @mysql_query("SELECT * FROM headwords WHERE lx = '".$lx."' OR g_eng = '".$g_eng."'") or die(mysql_error());
                                            while ($result = mysql_fetch_array($query_info)) {alert('danger','fas fa-exclamation-circle','Duplicate alert!','That word MAY already be in the dictionary.','off'); $countDuplicates++;}
                                            echo 'count= '.$countDuplicates;
                                            
                                            if ($countDuplicates=0) {
                                            $sql1 = "INSERT INTO headwords (lx, hm, lx_bfx, ph_bfx, ps_eng, g_eng, g_ceb, g_hil, g_tgl, d_eng, d_ceb, d_hil, d_tgl, is_eng, sd_eng, co_eng, user, dt)
                                                    VALUES ('$lx', $hm, '$lx_bfx', '$ph_bfx', '$ps_eng', '$g_eng', '$g_ceb', '$g_hil', '$g_tgl', '$d_eng', '$d_ceb', '$d_hil', '$d_tgl', '$is_eng', '$sd_eng', '$co_eng', $user, NOW())";
                                            $result1 = mysql_query($sql1);
                                            if ($result1) { $lastId = mysql_insert_id();
                                                            alert('success','fas fa-check','Success!','Headword <em>'.$lx.'</em> added to lexicon (id# '.$lastId.').','off'); }
                                            else          { alert('danger','fas fa-exclamation-circle','Error!','Something went wrong. Suggestion NOT inserted into lexicon. Try again.','off');}
                                            
                                            $sql2 = "UPDATE suggestions SET headword_id=".$lastId." WHERE id=".$suggestionId."";
                                            $result2 = mysql_query($sql2);
                                            if ($result2) { alert('success','fas fa-check-double','Success!','Old headword invalidated. As such, it will still appear in the change log.','off');}
                                            else          { alert('danger','fas fa-exclamation-circle','Error!','Something went wrong. Suggestion NOT updated with new headword. Try again.','off');}
                                            
                                            
                                                                                        include 'suggestions_table.php';
                                            }
                                            }
                                            else {include 'includes/formMain.php';}
                                            break;
                                            
                                        case "duplicate":
                                            
                                            $lx_bfx = $_POST['lx_bfx'];
                                            $lx = $_POST['lx'];
                                            $hm = 1;
                                            $ph_bfx = $_POST['ph_bfx'];
                                            $ps_eng = $_POST['ps_eng'];
                                            $g_eng = $_POST['g_eng'];
                                            $g_ceb = $_POST['g_ceb'];
                                            $g_hil = $_POST['g_hil'];
                                            $g_tgl = $_POST['g_tgl'];
                                            $d_eng = $_POST['d_eng'];
                                            $d_ceb = $_POST['d_ceb'];
                                            $d_hil = $_POST['d_hil'];
                                            $d_tgl = $_POST['d_tgl'];
                                            $is_eng = $_POST['is_eng'];
                                            $sd_eng = $_POST['sd_eng'];
                                            $co_eng = $_POST['co_eng'];
                                            $user = $uid;
                                            
                                            $sql1 = "INSERT INTO headwords (lx, hm, lx_bfx, ph_bfx, ps_eng, g_eng, g_ceb, g_hil, g_tgl, d_eng, d_ceb, d_hil, d_tgl, is_eng, sd_eng, co_eng, user, dt)
                                                    VALUES ('$lx', $hm, '$lx_bfx', '$ph_bfx', '$ps_eng', '$g_eng', '$g_ceb', '$g_hil', '$g_tgl', '$d_eng', '$d_ceb', '$d_hil', '$d_tgl', '$is_eng', '$sd_eng', '$co_eng', '$user', NOW())";
                                            $result1 = mysql_query($sql1);
                                            if ($result1) { $lastId = mysql_insert_id();
                                                            alert('success','fas fa-check','Success!','Headword <em>'.$lx.'</em> added to lexicon (id# '.$lastId.').','off'); }
                                            else          { alert('danger','fas fa-exclamation-circle','Error!','Something went wrong. Suggestion NOT inserted into lexicon. Try again.','off');}
                                            
                                            
                                            
                                            
                                            foreach ($_POST['checkBox'] AS $key => $value) 
                                            {
                                                $sql2 = "UPDATE suggestions SET headword_id=".$lastId." WHERE id=".$key."";
                                                $result2 = mysql_query($sql2);
                                                if ($result2) { alert('success','fas fa-check-double','Success!','Old headword invalidated. As such, it will still appear in the change log.','off');}
                                                else          { alert('danger','fas fa-exclamation-circle','Error!','Something went wrong. Suggestion NOT updated with new headword. Try again.','off');}
                                                
                                            }
                                            include 'suggestions_table.php';
                                            break;
                                            
                                        case "view":
                                            include 'suggestions_table.php';
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
