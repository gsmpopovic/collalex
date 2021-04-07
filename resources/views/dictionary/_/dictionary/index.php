<!DOCTYPE HTML>
<!--
	Future Imperfect by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<html>
	<head>
		<title>Bantayanon Language Project</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="../_assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../_assets/css/dictionary.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="../_assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="../_assets/css/ie8.css" /><![endif]-->
		
		<link href="https://fonts.googleapis.com/css2?family=Rowdies|Raleway" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<style>
          .headword {
            font-family: 'Rowdies', serif;
            font-weight:bold;
            font-size: 48px;
            text-transform:none;
            letter-spacing:0px;
          }
          .off {
            color:#FFFFFF;
          }
          .headword_off {
            font-family: 'Rowdies', serif;
            font-weight:bold;
            font-size: 48px;
            text-transform:none;
            text-decoration:none;
            letter-spacing:0px;
          }
          .pronunciation {
            font-family: 'Raleway', serif;
            font-weight:normal;
            text-transform:none;
            text-decoration:none;
            font-size: 24px;
          }
          .badge {
            font-family: 'Raleway', serif;
            background-color:yellow;
            font-weight:normal;
          }
          sub {
            font-size:10;
          }
</style>
        </style>
		
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<!-- Main -->
					<div id="main">

<?php   include '../_assets/topnav.php';
        include '../_assets/connect.php';
        include 'dictionary_functions.php';
        if (isset($_GET['action'])) {$action=$_GET['action'];} else {$action="display";}
        if (isset($_GET['q'])) {$q=$_GET['q'];
                                $message = 'You searched for the Bantayanon word <strong>'.$q.'</strong>.';}
            else {              $q="random";
                                $message = 'Here&rsquo;s a random word from the dictionary!';}
        if (isset($_GET['hm'])) {$hm=$_GET['hm'];} else {$hm=1;}
    
    switch($action) {
 
    case "display":
        
        echo '              <article class="post">
                                <header>								
                                    <div class="title">
										'.$message.'
									</div>
								</header>
							</article>'; 
        $infoHeadwords = getHeadwords($q);
        foreach ($infoHeadwords as $key => $value)
        {
            $id = $value[0];
            $headword = $value[1];
            $entry = $value[2];
            $pronunciation = $value[3];
            
            echo '
                            <article class="post">
                                <header>								
                                    <div class="title">
										<span class="headword">'.$headword.'</span><sub>'.$entry.'</sub>  &nbsp;&nbsp;&nbsp;<a href="#"><span class="pronunciation">['.$pronunciation.'] <i class="fa fa-volume-up"></i></a></span>
									</div>
									<div class="meta"><span class="badge">&nbsp; STATUS: pending &nbsp;</span>
									</div>
								</header>
								<footer>
								<table>
								    <thead> <th></th>
								            <th><h2>english</h2></th>
								            <th><h2>cebuano</h2></th></thead>';
        
		$infoSenses = getSenses($id);
        $count=1;
		foreach ($infoSenses as $key => $value) {
            
            $syncat = $value[2];
            $g_eng = $value[3];
            $g_ceb = $value[4];
            $d_eng = $value[5];
            $d_ceb = $value[6];
            $semdom_id = $value[7];
            $semdom_other = $value[8];
            
			echo '			    <tr>    <td><h1>'.$syncat.'</h1></td>
								            <td><p>'.$g_eng;
        								        if ($g_eng AND $d_eng) {echo ', ';}
        								        if ($d_eng) {echo $d_eng;} echo '
        								        </p></td>
								            <td><p>'.$g_ceb;
        								        if ($g_ceb AND $d_ceb) {echo ', ';}
        								        if ($d_ceb) {echo $d_ceb;} echo '
        								        </p></td></tr>
								'; $count=$count+1;
        }
        echo '                  </table>
								</footer>
							</article>';
        }
    break;
    
    default:
        echo '
							<article class="post">
								<section>
									<h3>Begin Search Here</h3>
									<form method="get" action="index.php">
									<input type="hidden" value="display" name="action" />
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="q" value="" placeholder="Search" />
											</div>
											<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="Search" /></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>
							</article>
';    
    
    
}
?>
						


					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<header>
									<h2>Dictionary</h2>
								</header>
							</section>

						<!-- About -->
							<section class="blurb">
								<h2>SEARCH BANTAYANON WORD:</h2>
								<form method="get" action="index.php">
									<input type="hidden" value="display" name="action" />
										<div class="row uniform">
											<div>
												<input type="text" name="q" value="" placeholder="Bantayanon word" />
											</div>
											<div>
												<ul class="actions">
													<li><input type="submit" value="Search" /></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
										</div>
									</form>
								</ul>
							</section>
					</section>

			</div>

		<!-- Scripts -->
			<script src="../_assets/js/jquery.min.js"></script>
			<script src="../_assets/js/skel.min.js"></script>
			<script src="../_assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="../_assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../_assets/js/main.js"></script>

	</body>
</html>