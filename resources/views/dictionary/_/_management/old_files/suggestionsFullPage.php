<!DOCTYPE html>
<html lang="en">
<head>
  <base href="/dictionary/">
  <title>Lexicon Edit :: Bantayanon Dictionary Project</title>
<?php include '../metaslinksscripts.html'; 
	  include '../connect.php';  
	  include 'functionsLexicon.php'; 
	  if (isset($_GET['letter'])) { $letter = $_GET['letter'];
	                                $linkLetter = "?letter=" . ($_GET['letter']);}
	  if (isset($_GET['action'])) { $action = ($_GET['action']);} else {$action="view";}
?>

    <style>
    .alert .alert-link {
      text-decoration: underline;
    }
    </style>
  
</head>
<body>
<?php include '../navbar.php' ?>
<!--START MAIN PAGE CONTAINER-->
<div class="container-fluid">


  <!--START MAIN BODY ROW-->
  <div class="row">
  
	<!--START FIRST COLUMN-->
    <div class="col-sm-12 justify-content-md-center">
        <?php alert('primary','fas fa-tachometer-alt','<a href="/dictionary" class="alert-link">Dashboard</a> > <a href="lexicon/index.php" class="alert-link">Lexicon</a> > REVIEW SUGGESTIONS:','The following words have been suggested for inclusion in the dictionary.','off'); ?>

<?php

switch ($action) {
    
    case "duplicate":
        
        echo 'duplicate';
        
        break;
    
    case "enterAsIs":
        
        if (isset($_GET['suggestionId']))
             {  $suggestionId=$_GET['suggestionId'];
                enterAsIs($suggestionId);
                include 'tableSuggestions.php';
             }
        else {  alert('danger','fas fa-exclamation-circle','Error!','Please only use links provided on the site.','on');
                include 'tableSuggestions.php';
        }
        
        break;
    
    case "editAndEnter":
        
        if (isset($_GET['suggestionId']))
             {  $suggestionId=$_GET['suggestionId'];
                include 'formMain.php';
             }
        else {  alert('danger','fas fa-exclamation-circle','Error!','Please only use links provided on the site.','on');
                include 'tableSuggestions.php';
        }
        break;
    
    case "view":
        include 'tableSuggestions.php';
        break;
        
    default:
        echo '';
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
