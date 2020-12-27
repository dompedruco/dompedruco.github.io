<?php get_header(); ?>


<div class="grid_8">
  
 
	 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
 		<!--post-->
 		<div class="post_recipe">
			<h2 class="recipe_title">
				<a class="post_link" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
			</h2>
			<p class="post_time"> <?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?>  </p>
		
			<div class="post_content"> <?php the_content(); ?> </div> 
            
            	<div class="post_meta">
				<ul class="tag">
					<li> <?php comments_number('No comment', '1 comment', '% comments'); ?>   </li>
					
					<li> <!-- tags --> </li>
				</ul>
			</div>
            <div class="clear"></div>          
		</div>
	
	    <?php endwhile; else: ?>
			<!-- If a post wasn't found -->
			<h3> Sorry, I can't find that … </h3>		
		<?php endif; ?> 
		</div>
		
        
        <div class="grid_4">
		
		<div class="tags"id="sidebar">
		<!-- tags -->
			<p> Tags </p>
            
				<ul class="taglist"><?php wp_tag_cloud();?></ul>
          </div>
        </div><!--closes grid 4-->

    <!-- Display the Next and Prev post links -->
    <p><?php posts_nav_link(); ?></p>
    
    
	<?php get_footer(); ?>