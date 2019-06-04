<?php get_header(); ?>
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<article>
					<header>
						<h2 class="page-header" data-delighter><?php the_title(); ?></h2>
					</header>
					<div class="article__content"><?php the_content(); ?>
					</div>
				</article>
			<?php endwhile; endif; ?>
</main>
<?php //if(get_theme_mod('toggle_sidebar') == 'true'){get_sidebar();} ?>
<?php get_footer();?>   