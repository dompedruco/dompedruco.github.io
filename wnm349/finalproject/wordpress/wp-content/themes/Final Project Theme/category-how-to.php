
<?php get_header(); ?>


<div class="grid_8 post">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
 		<!--post-->
 		<div class="how_to">
			<h2 class="how_to_title">
				<a class="post_link" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
			</h2>
			<p class="post_time_howto"> <?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?>  </p>
		

            <div class="howto_content"> <?php the_content(); ?> </div> 
            
            	
            <div class="clear"></div>          
		
       
        </div>
	
	    <?php endwhile; else: ?>
			<!-- If a post wasn't found -->
			<h3> Sorry, I can't find that … </h3>		
		<?php endif; ?> 
		</div><!--closes post-->
        
        <?php get_sidebar(); ?>
        
    <!-- Display the Next and Prev post links -->
    <p><?php posts_nav_link(); ?></p>



</div><!--closes the whole container--> 
	<?php get_footer(); ?>
