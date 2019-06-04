<?php get_header(); ?>
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<article>
					<header>
						<h2 class="page-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</header>
					<div><?php the_excerpt(); ?>
					</div>
				</article>
			<?php endwhile; endif; ?>
	</main>
<?php get_footer();?>
