<?php get_header(); ?>
<style>
	#site-header{
		height: 80vh;
	}
	.site-header-line {
		top: 79.1vh;
	}
	#overlay{
		opacity: 0;
	}
	.color-mode-switch::after {
		/* top: 80vh; */
	}
</style>
<style type="text/css">
	.st0{fill:none;stroke:#FF0000;stroke-width:45;}
</style>
	<?php
		$args = array('post_type' => 'projects','posts_per_page'=>-1,'orderby'=>'rand');
		$loop = new WP_Query( $args );
		if($loop->have_posts()) : while($loop->have_posts()) : $loop->the_post(); ?>
		<a style="display:block;text-decoration:none;" class="piece" data-delighter href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('post-thumbnail',['class' => 'piece__img']); ?>
			<header>
				<h2><?php the_title(); ?></h2>
			</header>
			<div><?php the_excerpt(); ?></div>
		</a>
		<?php if(($loop->current_post + 1) != ($loop->post_count)){ 
		$number = rand(1,3);
		if($number == 1) {
		?>
			<svg class="connector" version="1.1" id="Layer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 6336.78467 1492" style="enable-background:new 0 0 6336.78467 1492;" xml:space="preserve">
			<path class="st0" d="M26.3924,0v371.96292v373.34567h6283v373.3457V1492"/>
			</svg>
		<?php } elseif($number == 2) { ?>
			<svg class="connector" version="1.1" id="Layer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 5894.4 1492" style="enable-background:new 0 0 5894.4 1492;" xml:space="preserve">
			<!-- <style type="text/css"> .st0{fill:none;stroke:#FF0000;stroke-width:63.1132;} </style> -->
			<path class="st0" d="M26.4,0v372v373.3h5829v373.3V1492"/>
			</svg>
		<?php } else { ?>
			<svg class="connector" version="1.1" id="Layer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 5246.4 1492" style="enable-background:new 0 0 5246.4 1492;" xml:space="preserve">
			<!-- <style type="text/css"> .st0{fill:none;stroke:#FF0000;stroke-width:59.4501;} </style> -->
			<path class="st0" d="M26.4,0v372v373.3h5172v373.3V1492"/>
			</svg>
		<?php }} ?>
	<?php endwhile; endif; ?>
</main>
<?php //if(get_theme_mod('toggle_sidebar') == 'true'){get_sidebar();}
get_footer();?>