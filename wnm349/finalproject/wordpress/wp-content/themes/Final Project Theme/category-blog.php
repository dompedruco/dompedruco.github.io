
<?php get_header(); ?>

    <!-- This begins displaying posts and comments. -->
  <div class="grid_8">
  
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
 		<!--post-->
 		
        
        <div class="blog">
        
			<h2 class="recipe_title">
				<a class="post_link" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
			</h2>
			<p class="post_time"> <?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?>  </p>
		
			<div class="blog_content"> <?php the_content(); ?></div> <!--closes post_content-->
            
            	<div class="post_meta">
				<ul class="tag">
					<li> <?php comments_number('No comment', '1 comment', '% comments'); ?>   </li>
					
					<li> <!-- tags --> </li>
				</ul>
			</div><!--closes post-meta-->
            
                     
		</div><!--closes blog-->
        	<div class="clear"></div>
        
    <?php endwhile; else: ?>
   </div><!--closes grid_8-->
        <!-- If there are no posts display the message below -->
        <h3>Woops...</h3>
        <p>Sorry, no posts were found.</p>
    <?php endif; ?>    
	</div><!--closes blog-->
    <!-- Display the Next and Prev post links -->
    <p><?php posts_nav_link(); ?></p>



    
    
 <?php get_sidebar(); ?>
 
 
 
</div><!--closes the whole container--> 
	<?php get_footer(); ?>