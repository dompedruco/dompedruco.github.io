
			
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
				<?php wp_list_pages("title_li=");?> <!-- &depth=1 gets rid of of the bottom contnet-->
			</ul>
		</nav>
		
	
		<div class="container_12" id="header">
			<h1> <a class="title_link" href="<?php bloginfo('url'); ?>"> <?php bloginfo('name'); ?> </a> </h1> <!-- Blog Title -->
			<p class="blog_description"> <?php bloginfo('description'); ?> </p> <!-- Blog Description -->
		</div>
	
	
	
	
	<div class="container_12">
	<div class="grid_8" id="content">
	
	
	 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
 		<!--post-->
 		<div class="post">
			<h2>
				<a class="post_link" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
			</h2>
			<p class="post_time"> <?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?>  </p>
			<div class="post_meta">
				<ul class="tag">
					<li> <?php comments_number('No comment', '1 comment', '% comments'); ?>   </li>
					<li> <?php the_category(', '); ?> </li>
					<li> <!-- tags --> </li>
				</ul>
			</div>
			<div class="post_content"> <?php the_content(); ?> </div> 
            <div class="clear"></div>          
		</div>
	
	    <?php endwhile; else: ?>
			<!-- If a post wasn't found -->
			<h3> Sorry, I can't find that … </h3>		
		<?php endif; ?> 
		</div>
		
		 

	<?php get_sidebar(); ?>
		
	
	</div> <!--closes container_12-->
	
	<?php get_footer(); ?>
