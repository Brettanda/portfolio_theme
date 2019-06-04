</div>
	<footer class="main-footer">
		<?php 
			if(has_nav_menu('social-menu')){
				wp_nav_menu(array(
					'theme_location' => 'social-menu',
					'container' => 'nav',
					'fallback_cb' => false,
					'container_id' => 'social-menu'
				));
			}
		?>
		<p><?php print date('Y'); ?> &copy; Brett Anda. All Rights Reserved.</p>
	</footer>
<?php wp_footer(); ?>
<script src="<?php print get_stylesheet_directory_uri(); ?>/node_modules/jquery/dist/jquery.min.js" crossorigin="anonymous"></script>
<script src="<?php print get_stylesheet_directory_uri(); ?>/assets/compiled/script.min.js"></script>
<?php require('assets/scripts/scripts.php'); ?>
</body>
</html>
