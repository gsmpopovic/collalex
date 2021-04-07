<!DOCTYPE html>
<html lang="en">
<head>
  <base href="/dictionary/">
  <title>Lexicon Edit :: Bantayanon Dictionary Project</title>
<?php include '../metaslinksscripts.html'; 
	  include '../connect.php';  
	  include 'functionsLexicon.php'; 
	  include '../functions.php'; 
	  if (isset($_GET['action'])) { $action = ($_GET['action']);} else {$action="form";}
	  if (isset($_GET['headwordId'])) { $headwordId = ($_GET['headwordId']);} else {$headwordId=0;}
	  $file="editSingle.php";
?>

    <style>
    .alert .alert-link {
      text-decoration: underline;
    }
    </style>
  
</head>
<body>

<!--NAVBAR-->
<?php include '../navbar.php' ?>


<!--START MAIN PAGE CONTAINER-->
<div class="container-fluid">


<!--BREADCRUMB-->
<div class="row justify-content-md-center">
    <div class="col-sm-8">
        <?php alert('primary','fas fa-tachometer-alt','<a href="/dictionary" class="alert-link">Dashboard</a> > <a href="lexicon/index.php" class="alert-link">Lexicon</a> > SINGLE-WORD ENTRY:','Use the form below to suggest a word for the dictionary.','off'); ?>
    </div>
</div>


  <!--START MAIN BODY ROW-->
  <div class="row justify-content-md-center">
  
	<!--START FIRST COLUMN-->
    <div class="col-sm-6">


<?php

if (isset($_POST['lx']))
{
        $lx = $_POST['lx'];
        $hm = 1;
        $lx_bfx = $_POST['lx_bfx'];
        $ph_bfx = $_POST['ph_bfx'];
        $co_eng = $_POST['co_eng'];
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
        $user = $_POST['user'];
        $headwordId = $_POST['headwordId'];
}

switch ($action) {
    
    case "update":
        
        alert('warning','fas fa-info-circle','Need to add:','duplicate check','off');

        $sql1 = "INSERT INTO headwords (lx, hm, lx_bfx, ph_bfx, ps_eng, g_eng, g_ceb, g_hil, g_tgl, d_eng, d_ceb, d_hil, d_tgl, is_eng, sd_eng, co_eng, user, dt)
                VALUES ('$lx', $hm, '$lx_bfx', '$ph_bfx', '$ps_eng', '$g_eng', '$g_ceb', '$g_hil', '$g_tgl', '$d_eng', '$d_ceb', '$d_hil', '$d_tgl', '$is_eng', '$sd_eng', '$co_eng', $user, NOW())";
        $result1 = mysql_query($sql1);
        if ($result1) { $lastId = mysql_insert_id();
                        alert('success','fas fa-check','Success!','Headword <em>'.$lx.'</em> added to lexicon (id# '.$lastId.').','off');
                        getDictionaryFormatted($lastId);
        }
        else {alert('danger','fas fa-exclamation-circle','Error!','Something went wrong. Suggestion NOT inserted into lexicon. Try again.','off');}

        $sql3 = "UPDATE headwords SET validity='expired' WHERE id=".$headwordId."";
        $result3 = mysql_query($sql3);
        if ($result3) {alert('success','fas fa-check-double','Success!','Old headword invalidated. As such, it will still appear in the change log.','off');}
        else {alert('danger','fas fa-exclamation-circle','Error!','Something went wrong. Suggestion NOT updated with new headword. Try again.','off');}

    
        $headwordId=$lastId;
        include 'formMain.php';
        break;
    
    case "form":
        include 'formMain.php';
        break;
        
    default:
        $headwordId=0;
        include 'formMain.php';
}

?>









	</div>
	<!--END FIRST COLUMN-->

  </div>
  <!--END MAIN BODY ROW-->

</div>
<!--END MAIN PAGE CONTAINER-->
    
</body>
</html>
