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
<!-- <script src="<?php //print get_stylesheet_directory_uri(); ?>/node_modules/jquery/dist/jquery.min.js" crossorigin="anonymous"></script> -->
<script rel="preload" src="<?php print get_stylesheet_directory_uri(); ?>/assets/dist/script.min.js"></script>
<?php require('assets/src/scripts/scripts.php'); ?>
<script src="//instant.page/1.2.2" type="module" integrity="sha384-2xV8M5griQmzyiY3CDqh1dn4z3llDVqZDqzjzcY+jCBCk/a5fXJmuZ/40JJAPeoU"></script>
</body>
</html>
