<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title> <?php wp_title("|", true, "right"); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/960.css" type="text/css" media="screen,projection" /> <!--for css layout-->


<?php wp_head();?>
<link href='http://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=BenchNine:700,300,400' rel='stylesheet' type='text/css'>

</head>

<body>


		<nav class="container_12 navigation">
			<ul id="nav_list">
				 <?php //wp_list_pages("title_li=&depth=1");?> <!-- &depth=1 gets rid of of the bottom contnet-->
			</ul>
		</nav>
		
		<!-- nav menu -->
		<?php wp_nav_menu("main"); ?>
		<!-- nav menu -->
		
		<div class="container_12" id="header">
			<h1> <a class="title_link" href="<?php bloginfo('url'); ?>"> <?php bloginfo('name'); ?> </a> </h1> <!-- Blog Title -->
			<p class="blog_description"> <?php bloginfo('description'); ?> </p> <!-- Blog Description -->
		</div>