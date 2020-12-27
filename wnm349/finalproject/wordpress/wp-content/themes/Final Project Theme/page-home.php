
<?php get_header(); ?>

<div class="post container_12">
     
   
    
    
      <!-- This begins displaying posts and comments. -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    
        <!-- Diplay the title of a post. Use the_permalink() to get the URL to that post. Use the_title() to get the title of the post -->
        <h3>
        	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <!-- Display the contents of the post -->
      
       
       <div class="content"> 
	  		<?php the_content(); ?>
       </div>
       
        <!-- Diplsay the date and category for a post. Note the parameters shown here format the date and time. -->
      
       
    <?php endwhile; else: ?>
   
        <!-- If there are no posts display the message below -->
        <h3>Woops...</h3>
        <p>Sorry, no posts were found.</p>
    <?php endif; ?>    

    <!-- Display the Next and Prev post links -->
    <p><?php posts_nav_link(); ?></p>


</div><!--closes the postcontainer--> 


<!--
<div class="home_recipes container_12">
	<h2 class="grid_12"> recipes</h2>
 
 
 
 <div class="first galleryitem grid_4">
 
  
 <div class="image"><a href="http://dompedruco.com/wnm349/finalproject/wordpress/?cat=1"><img class="alignleft size-full wp-image-87" title="buffalo-wings-a" src="http://dompedruco.com/wnm349/finalproject/wordpress/wp-content/uploads/2010/10/buffalo-wings-a1.jpg" alt="" width="300" height="200" /></a><img src="<?php bloginfo('template_url'); ?>/images/buffalo-wings-a.jpeg">
 <p> TITLE </p>

 
 </div> 
 
 <p class="author">by: <author>John Doe</author> </p>
 <p class="categories"> 
 <a href="#"><i>Graphic Design</i></a> ,
 <a href="#"><i>industrial</i></a></p>
 </div>
    

  
  
 <div class="galleryitem grid_4"> 
 <div class="image"><img src="<?php bloginfo('template_url'); ?>/images/chicken-mango-chutney-1.jpeg"  />
 <p> TITLE </p>
 
 </div> 
 <p class="author">by: <author>John Doe</author> </p>
 <p class="categories"> 
 <a href="#"><i>Graphic Design</i></a> ,
 <a href="#"><i>industrial</i></a></p>
 </div>
 
 
 
 <div class="galleryitem grid_4"> 
 
  <div class="image"><img src="<?php bloginfo('template_url'); ?>/images/crispy-chicken-skin-tacos-a.jpeg"  />
 <p> TITLE </p>
 </div> 
 
 <p class="author">by: <author>John Doe</author> </p>
 <p class="categories"> 
 <a href="#"><i>Graphic Design</i></a> ,
 <a href="#"><i>industrial</i></a></p>
 </div>
 
 
 <div class="clear"></div>
  <div class="first galleryitem grid_4">
 
 
 <div class="image"><img src="<?php bloginfo('template_url'); ?>/images/buffalo-wings-a.jpeg">
 <p> TITLE </p>
 </div> 
 
 <p class="author">by: <author>John Doe</author> </p>
 <p class="categories"> 
 <a href="#"><i>Graphic Design</i></a> ,
 <a href="#"><i>industrial</i></a></p>
 </div>
    

  
  
 <div class="galleryitem grid_4"> 
 <div class="image"><img src="<?php bloginfo('template_url'); ?>/images/chicken-mango-chutney-1.jpeg"  />
 <p> TITLE </p>
 
 </div> 
 <p class="author">by: <author>John Doe</author> </p>
 <p class="categories"> 
 <a href="#"><i>Graphic Design</i></a> ,
 <a href="#"><i>industrial</i></a></p>
 </div>
 
 
 
 <div class="galleryitem grid_4"> 
 
  <div class="image"><img src="<?php bloginfo('template_url'); ?>/images/crispy-chicken-skin-tacos-a.jpeg"  />
 <p> TITLE </p>
 </div> 
 
 <p class="author">by: <author>John Doe</author> </p>
 <p class="categories"> 
 <a href="#"><i>Graphic Design</i></a> ,
 <a href="#"><i>industrial</i></a></p>
 </div>
 
--><!--comment out top-->


</div><!--closes home_recipes-->






<?php get_footer(); ?>