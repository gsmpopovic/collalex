
<!DOCTYPE html>
<html lang="en">
<head>
<?php include '../metaslinksscripts.html'; 
	  include '../connect.php';  
	  include 'functions_lexicon.php';
	  include 'variables.php';
	  echo '
  <title>'.$title.'</title>';
?>
  
</head>
<body>

<!--START NAVBAR-->
<?php include 'navbar.php' ?>
<!--END NAVBAR-->

<!--START MAIN PAGE CONTAINER-->
<div class="container-fluid bg-light p-0">


<!--START CONTENT ROW-->
<div class="row justify-content-md-center">
    <div class="col-sm-12">
        <?php var_dump($_SESSION); ?><br>
        <?php echo $uid; ?>
    </div>
</div>
<!--END CONTENT ROW-->


</div>
<!--END MAIN PAGE CONTAINER-->
    
</body>

</html>
