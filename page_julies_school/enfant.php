<!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml">

		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>Julie's School - SYD Apprendre Autrement</title>
			<meta name="author" content="Raffin Alexis" />
			<meta name="description" content="fullPage full-screen sliders navigation widh dots." />
			<meta name="keywords"  content="fullpage,jquery,demo,screen,fullscreen,sliders navigation, horizontal navigation,horizontal,navigation,dots" />
			<meta name="Resource-type" content="Document" />

			<!-- <link rel="stylesheet" type="text/css" href="css/general.css" /> -->
			<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
			<!-- <link rel="stylesheet" type="text/css" href="css/examples.css" /> -->

			<style>
			</style>

			<script src="js/jquery.min.js"></script>
			<script type="text/javascript" src="js/jquery.fullPage.js"></script>
			<script type="text/javascript">
				$(document).ready
					(function()
						{
							$('#fullpage').fullpage
							(
								{
								anchors: ['Apprendre Autrement', 'secondPage', '3rdPage'],
								// sectionsColor: ['#8FB98B', 'transparent', '#EAE1C0'],
								slidesNavigation: true,
								controlArrowColor: ['lightblue'],
								}
							);
						}
					);
			</script>
			<!--[if IE]>
				<script type="text/javascript">
					var console = { log: function() {} };
				</script>
			<![endif]-->

		</head>

		<body>

			<div id="fullpage"><!-- ancre pour aller vers le bas -->

				<div class="section" id="section1">

					<div class="slide" id="slide1" data-anchor="Exercice" style=" background-image: url(img/1_forest.jpg); background-size: cover;">
						<div class="intro">
							<?php
								include("slide/exercice.php");
							?>
						</div>
					</div>

					<div class="slide" id="slide2" data-anchor="SYD" style=" background-image: url(img/2_house.jpg); background-size: cover;">
						<?php
							include("slide/syd.php");
						?>
					</div>

					<div class="slide" id="slide3" data-anchor="Jeux" style="	background-image: url(img/3_castle.jpg); background-size: cover;">
						<?php
						 	include("slide/jeux.php");
				 		?>
					</div>
				</div>

			</div>

		</body>
	</html>
