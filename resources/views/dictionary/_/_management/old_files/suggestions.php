<!DOCTYPE html>
<html lang="en">
<head>
  <title>Suggest New Words :: Bantayanon Dictionary Project</title>
<?php include '../metaslinksscripts.html'; 
	  include '../connect.php';  
	  include 'functionsLexicon.php'; 
	  include '../functions.php'; 
	  if (isset($_GET['letter'])) { $letter = $_GET['letter']; $letterLink="?letter=".$letter;} else {$letter=""; $letterLink="";}
	  if (isset($_GET['suggestionId'])) { $suggestionId = $_GET['suggestionId'];} else {$suggestionId=0;}
	  if (isset($_GET['action'])) { $action = $_GET['action'];} else {$action="view";}

?>


  
</head>
<body>

<!--NAVBAR-->
<?php include 'navbar.php' ?>

<!--START MAIN PAGE CONTAINER-->
<div class="container-fluid">


<!--ROW 1 :: BREADCRUMB-->
<div class="row justify-content-md-center">
    <div class="col-sm-12">
        <?php alert('primary','fas fa-tachometer-alt','<a href="/dictionary" class="alert-link">Dashboard</a> > <a href="lexicon/index.php" class="alert-link">Lexicon</a> > SINGLE-WORD ENTRY:','Use the form below to suggest a word for the dictionary.','off'); ?>
    </div>
</div><!--END BREADCRUMBS ROW-->


<!--ACTION SWITCHES-->
<?php
	  switch ($action) {
    
        case "duplicate":
            
            echo 'duplicate';
            
            break;
        
        case "enterAsIs":
            
            if ($suggestionId>0)
                 {  
                     enterAsIs($suggestionId);
                 }
            else {  alert('danger','fas fa-exclamation-circle','Error!','Please only use links provided on the site.','on');
            }
            
            break;
        
        case "editAndEnter":
            
            if ($suggestionId>0)
                 {  $file="suggestions.php";
                    include 'formMain.php';
                 }
            else {  alert('danger','fas fa-exclamation-circle','Error!','Please only use links provided on the site.','on');
                    include 'tableSuggestions.php';
            }
            break;
        
        case "view":
            echo '';
            break;
            
        default:
            echo '';
    }
?><!--END ACTION SWITCHES-->


<!--ROW 2 :: START TABS ROW-->
<div class="row justify-content-md-center">
    <div class="col-sm-12">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-tableview-tab" data-toggle="tab" href="#nav-tableview" role="tab" aria-controls="nav-tableview" aria-selected="true"><i class="fas fa-table"></i> Table view</a>
            <a class="nav-item nav-link" id="nav-formattedview-tab" data-toggle="tab" href="#nav-formattedview" role="tab" aria-controls="nav-formattedview" aria-selected="false"><i class="fas fa-paragraph"></i> Formatted view</a>
            <a class="nav-item nav-link" id="nav-help-tab" data-toggle="tab" href="#nav-help" role="tab" aria-controls="nav-help" aria-selected="false"><i class="far fa-question-circle"></i> Help</a>
          </div>
        </nav>
    </div>
</div><!--END TABS ROW-->

<br>

<!--ROW 3 :: START CONTENT ROW-->
<div class="row justify-content-md-center">
    <div class="col-sm-12"><div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-tableview" role="tabpanel" aria-labelledby="nav-tableview-tab">
            <?php include 'suggestions_table.php'.$letterLink; ?>
        </div>
        <div class="tab-pane fade" id="nav-formattedview" role="tabpanel" aria-labelledby="nav-formattedview-tab">
            formatted edit
        </div>
        <div class="tab-pane fade" id="nav-help" role="tabpanel" aria-labelledby="nav-help-tab">
            ENTER HELP TEXT
        </div>
    </div>
</div><!--END CONTENT ROW-->





</div><!--END MAIN PAGE CONTAINER-->
    
</body>
</html>
