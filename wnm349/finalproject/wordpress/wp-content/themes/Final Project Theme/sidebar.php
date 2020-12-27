<div class="grid_4">
		
		<div class="tags"id="sidebar">
		<!-- tags -->
			<p> Tags </p>
            
				<ul class="taglist"><?php wp_tag_cloud();?></ul>
          </div>
        </div><!--closes grid 4-->

    <!-- Display the Next and Prev post links -->
    <p><?php posts_nav_link(); ?></p>
     <div class="grid_4">
    <ul id='nav'><!--this is the blog nav!! -->
        
      
        
        <!-- links -->
      
		<div class="blogroll"><?php wp_list_bookmarks(); ?></div>
        <!-- login -->
        <li><h3>Meta</h3>
        	 	<?php wp_register(); ?>
                <!-- Admin login/logout links -->
                <li><?php wp_loginout(); ?></li>
            
        </li>
        
	</ul>
    </div><!--closes grid 4-->