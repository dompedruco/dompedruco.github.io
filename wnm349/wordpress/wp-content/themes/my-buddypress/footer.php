		</div> <!-- #container -->



		<?php do_action( 'bp_after_container' ) ?>

		<?php do_action( 'bp_before_footer' ) ?>



		<div id="footer">

		

		   	 <p>

		&copy; <?php echo date('Y'); ?>. <?php bloginfo('name'); ?> - <a href="http://www.angelicaflorine.net" target="_blank">&hearts;AFS</a>.

	</p>



			<?php do_action( 'bp_footer' ) ?>

		</div><!-- #footer -->



		<?php do_action( 'bp_after_footer' ) ?>



		<?php wp_footer(); ?>



	</body>



</html>