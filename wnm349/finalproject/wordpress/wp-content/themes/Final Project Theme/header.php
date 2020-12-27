<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> 
<title> <?php wp_title("|", true, "right"); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/960.css" type="text/css" media="screen,projection" /> <!--for css layout-->
<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>> 
   <div class="wrapper">
   
	<div class="container_12" id="content">
        <div id='header'>
            <div class="container_12 grid_12" id="header_box">
            		<div id="logo">
                         <h1>
                             <a href="<?php echo get_option('home'); ?>">
                             <?php bloginfo('name'); ?></a>
                         </h1>
                	 </div><!--closes logo-->
                <h2><?php bloginfo('description'); ?></h2>
        
        
               	 <nav class="grid_12 navigation">
						<ul id="nav-list">
               			 <?php wp_nav_menu( array("theme_location"=>"main") );?>
                        </ul>
              	</nav>
              </div><!--closes headerbox--> 
       </div><!--closes header-->
        
       
