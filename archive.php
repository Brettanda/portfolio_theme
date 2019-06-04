<?php get_header(); ?>
<?php
		$args = array('post_type' => '');
		$loop = new WP_Query( $args );
		if($loop->have_posts()) : while($loop->have_posts()) : $loop->the_post(); ?>
		<a style="display:block;text-decoration:none;" class="piece" data-delighter href="<?php the_permalink(); ?>">
			<article>
				<header>
					<?php the_post_thumbnail('post-thumbnail',['class' => 'piece__img']); ?>
					<h2><?php the_title(); ?></h2>
				</header>
				<div><?php the_excerpt(); ?></div>
			</article>
		</a>
		<?php if(($loop->current_post + 1) != ($loop->post_count)){ ?>
	<svg class="connector" version="1.1" id="Layer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		viewBox="0 0 6336.78467 1492" style="enable-background:new 0 0 6336.78467 1492;" xml:space="preserve">
	<path class="st0" d="M26.3924,0v371.96292v373.34567h6283v373.3457V1492"/>
	<g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
	</svg>
		<?php } ?>
	<?php endwhile; endif; ?>
</main>
<?php get_footer();?>
