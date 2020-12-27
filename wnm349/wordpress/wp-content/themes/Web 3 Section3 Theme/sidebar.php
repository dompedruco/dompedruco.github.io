	<div class="grid_4">
		<div class="categories" id="sidebar">
			<!-- categories -->
			<p> Categories </p>
			<ul> <?php wp_list_categories("title_li="); ?> </ul>
		</div> <!--closed categories -->
		
		<div class="tags"id="sidebar">
		<!-- tags -->
			<p> Tags </p>
            
				<div class="taglist"><?php wp_tag_cloud();?></div>
          </div>
        
        
		<div class=" archives" id="sidebar">
			<p> Archives</p>
			<ul><?php wp_get_archives("type=monthly&show_post_count=1&title_li=");?></ul>
			
		</div>
			<!--Links -->
		<div class="links" id="sidebar">
			<p> Links </p>
			<?php wp_list_bookmarks("categorize=0&title_li=&title_before=&title_after=");?>
		</div>
			<!-- meta tag -->
            
		<div class=" meta" id="sidebar">
			<li>Meta</li>
        	<ul>
        		<?php wp_register(); ?>
                <!-- admin log-in and log out -->
                <li><?php wp_loginout(); ?></li>
            </ul>
        </li>

			
			
			</ul>
		</div>
        </div><!--closes grid_4-->