
<?php get_header(); ?>
	<div class="grid_8">
    <!-- This begins displaying posts and comments. -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    
        <!-- Diplay the title of a post. Use the_permalink() to get the URL to that post. Use the_title() to get the title of the post -->
        <h3 class="grid_8 index_h3">
        	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
          <p class="post_time_index"><?php the_time('F JS Y'); ?> at <?php the_time('g:i a'); ?> | </p>
        <!-- Display the contents of the post -->
      <div class="content2"> 
	  		<?php the_content(); ?>
       </div>
       
        <!-- Diplsay the date and category for a post. Note the parameters shown here format the date and time. -->
        <p class="post_time"><?php the_time('F JS Y'); ?> at <?php the_time('g:i a'); ?> | </p>
        <div class="post_meta">
        	<ul class="tag">
        	
        		<li><?php comments_number('No comment', '1 comment', '% comments'); ?></li>
            	<li><!--tags--></li>
            
         	</ul>
         </div><!--closes post meta-->
    <?php endwhile; else: ?>
   
        <!-- If there are no posts display the message below -->
        <h3>Woops...</h3>
        <p>Sorry, no posts were found.</p>
    <?php endif; ?>    

    <!-- Display the Next and Prev post links -->
    <p><?php posts_nav_link(); ?></p>
</div><!--closes the whole container--> 
	
	</div><!--closes grid 8-->
    
    

    
	<?php get_footer(); ?>