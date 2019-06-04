<?php get_header(); ?>
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<article>
					<header>
						<h2 class="page-header" data-delighter><?php the_title(); ?></h2>
					</header>
					<div class="article__content"><?php the_content(); ?>
					</div>
				</article>
			<?php 
			endwhile; endif;
			//for use in the loop, list 5 post titles related to first tag on current post
			// $orig_post = $post;
			// global $post;
			$tags = wp_get_post_tags($post->ID);
			if ($tags) {
				// $first_tag = $tags[0]->term_id;
				$tag_ids = array();
				foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
				$args=array(
					'tag__in' => $tag_ids,//array($first_tag),
					'post_type' => 'projects',
					'post__not_in' => array($post->ID),
					'posts_per_page'=>5,
					'caller_get_posts'=>1,
					'orderby' => 'rand'
				);
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
					print '<article><header><h3>Related Posts</h3></header><div class="related-post-container">';
					while ($my_query->have_posts()) { 
						$my_query->the_post(); ?>
						<a data-delighter class="related-post" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
							<h4><?php the_title(); ?></h4>
							<div class="related-post__content"><?php the_excerpt(); ?></div>
						</a>
						<?php
					}
					print"</div></article>";
				}
				// $post = $orig_post;
				wp_reset_query();
				
			}?>
</main>
<?php //if(get_theme_mod('toggle_sidebar') == 'true'){get_sidebar();}
get_footer();?>