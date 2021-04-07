<?php 	include '_assets/functions.php';
		include '_assets/connect.php'; 
		if (isset($_GET['page'])) {$page=$_GET['page'];} else {$page="welcome";}

		if ($page=="about")			{$pageTitle="About the Project"; $postId=8;}
		elseif ($page=="language")		{$pageTitle="The Bantayanon Language"; $postId=2;}
		elseif ($page=="welcome") 		{$pageTitle="Welcome"; $postId=1;}
		elseif ($page=="contribute") 	{$pageTitle="Please Contribute"; $postId=15;}
		else 					 		{$pageTitle="Welcome"; $postId=1;}

		if (isset($_GET['postId'])) {$postId=$_GET['postId'];}
?>
<!DOCTYPE HTML>
<!--
	Future Imperfect by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<html>
	<head>
		<title><?php echo $pageTitle; ?> | Bantayanon Language Development Project</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="_assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="_assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="_assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="_assets/css/ie8.css" /><![endif]-->
		<link rel="icon" href="_assets/images/icon_beach_withB.ico">
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
<?php include '_assets/topnav.php'; ?>

				<!-- Main -->
					<div id="main">

							<?php echo	getPost($postId); ?>
					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
						<?php 
						  echo '
							<section id="intro">
								<header>
									<h2>'.$pageTitle.'</h2>
									<p>[translation]</p>
								</header>
							</section>';

						 ?>

						<!-- Mini Posts -->

						<!-- Posts List -->
							<section>
						<header>
									<h2>Related Posts</h2>
									<p>[translation]</p>
						</header>
								<div class="mini-posts">
									<?php 	getSidebarPostListPublished($page,$postId,'published'); ?>
								</div>
							</section>
							<section>
						<header>
									<h2>Upcoming Posts</h2>
									<p>[translation]</p>
						</header>
								<ul class="posts">
									<?php 	getSidebarPostListUpcoming($page,$postId,'draft'); ?>
								</ul>
							</section>
						<!-- About -->

						<!-- Footer -->
							<section id="footer">

							</section>

					</section>

			</div>

		<!-- Scripts -->
			<script src="_assets/js/jquery.min.js"></script>
			<script src="_assets/js/skel.min.js"></script>
			<script src="_assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="_assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="_assets/js/main.js"></script>

	</body>
</html>