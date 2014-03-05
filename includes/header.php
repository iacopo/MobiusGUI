<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Mobius GUI<?php if(isset($title)) { echo " &mdash; " . $title; } ?></title>
	<meta name="description" content="A simple, slick web-based interface to set all the parameters on your Mobius action camera.">

	<link href='http://fonts.googleapis.com/css?family=Exo+2:400,700|Droid+Serif' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/960.css" />
	<link rel="stylesheet" href="css/style.css?<?php echo time(); ?>">

	<!-- google analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-2674259-9', 'mobiusgui.com');
		ga('send', 'pageview');
	</script>
</head>
<body>
	<div class="page-wrap">
		<div class="header">
			<div class="container_12">
				<div class="grid_4"><a href="/"><img src="img/logo.png" alt="Mobius GUI" class="logo"></a></div>
				<div class="grid_8">
					<ul class="menu">
						<li><a href="instructions.php">Instructions</a></li>
						<li><a href="info.php">Info</a></li>
					</ul>
				</div>
				<div class="clear"></div>
				<div class="grid_12" id="drop_area">
					<?php if(isset($drop_area_text)) { echo $drop_area_text; } ?>
				</div>
			</div>
		</div><!-- .header -->