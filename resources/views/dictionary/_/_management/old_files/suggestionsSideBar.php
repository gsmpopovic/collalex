<!DOCTYPE html>
<html lang="en">
<head>
  <base href="/sites/bantayanon.ph/dictionary/">
  <title>Bootstrap Example</title>
<?php include '../includes/metaslinksscripts.html'; 
	  include '../includes/connect.php';  
	  include 'functions.php'; ?>
  
</head>
<body>
<?php include '../includes/navbar.php' ?>
<!--START MAIN PAGE CONTAINER-->
<div class="container-fluid">


  <!--START MAIN BODY ROW-->
  <div class="row">
  
	<!--START FIRST COLUMN-->
    <div class="col-sm-8">
		<h1>Suggestions</h1>
		<p>The following words have been suggested for inclusion in the dictionary.</p>

<?php getSuggestionsTable(); ?>
	</div>
	<!--END FIRST COLUMN-->

	<!--START SECOND COLUMN-->
    <div class="col-sm-4">
		<h1>Details</h1>
		<p>The following column shows the details for the word selected.</p>
		<embed name="details" src="lexicon/details.php" style="width:100%; height:750px"/></embed>
	</div>
	<!--END SECOND COLUMN-->

  </div>
  <!--END MAIN BODY ROW-->

</div>
<!--END MAIN PAGE CONTAINER-->
    
</body>
</html>
