<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
<?php include '../includes/metaslinksscripts.html'; 
	  include '../includes/connect.php';  
	  include 'functions.php';
	  if (isset($_GET['id'])) {$id = ($_GET['id']);} else {$id=0;}
      if (isset($_GET['action'])) {$action = ($_GET['action']);} else {$action="view";}
?>
  
</head>
<body>
<!--START MAIN PAGE CONTAINER-->
<div class="container-fluid">


  <!--START MAIN BODY ROW-->
  <div class="row">
  
	<!--START FIRST COLUMN-->
    <div class="col-sm-12">
<?php

switch ($action) {
    
    case "duplicate":
        
        $suggestionId = $_POST['suggestionId'];
        $newHeadwordId =  $_POST['newHeadwordId']; echo $suggestionId.'<br>'.$newHeadwordId;
        
        $sql3 = "UPDATE suggestions SET headword_id=".$newHeadwordId." WHERE id=".$suggestionId."";
        $result3 = mysql_query($sql3);
        if ($result3) {echo '<p>updated duplicate suggestion with newly created headword</p>';}
        else {echo 'failed';}
        
        break;
    
    case "enterAsIs":
        
        echo 'enterAsIs';
        
        break;
    
    case "insert":
        $lx = $_POST['lx'];
        $hm = 1;
        $lx_bfx = $_POST['lx_bfx'];
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
        $user = 1;
        
        $suggestionId = $_POST['suggestionId'];

        echo '<p>! add duplicate check !</p>';

        $sql1 = "INSERT INTO headwords (lx, hm, lx_bfx, ph_bfx, ps_eng, g_eng, g_ceb, g_hil, g_tgl, d_eng, d_ceb, d_hil, d_tgl, is_eng, sd_eng, co_eng, user)
                VALUES ('$lx', $hm, '$lx_bfx', '$ph_bfx', '$ps_eng', '$g_eng', '$g_ceb', '$g_hil', '$g_tgl', '$d_eng', '$d_ceb', '$d_hil', '$d_tgl', '$is_eng', '$sd_eng', '$co_eng', $user)";
        $result1 = mysql_query($sql1);
        if ($result1) {$lastId = mysql_insert_id(); echo '<p>headword inserted at '.$lastId.'</p>';}
        else {echo 'failed';}
        
        $sql3 = "UPDATE suggestions SET headword_id=".$lastId." WHERE id=".$suggestionId."";
        $result3 = mysql_query($sql3);
        if ($result3) {echo '<p>updated suggestion with newly created headword</p>';}
        else {echo 'failed';}

        break;
        
    default:
        if ($id>0) { include 'formMain.php';}
        else {    echo '
			   <div class="alert alert-info">
			   		<strong>NO SELECTION</strong> Choose an entry from the table on the left to proceed.
			   </div>';
     		}
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
