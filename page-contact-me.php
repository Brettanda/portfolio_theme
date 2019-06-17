<?php get_header(); ?>
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<article>
					<header>
						<h2 class="page-header" data-delighter><?php the_title(); ?></h2>
					</header>
					<div class="article__content">
						<?php the_content(); ?>
						<!-- <form action="#" method="">
							<label for="fname">First Name</label>
							<input type="text" id="fname" name="fname" placeholder="Jane" autofocus required>
							<label for="lname">Last Name</label>
							<input type="text" id="lname" name="lname" placeholder="Doe" required>
							<label for="email">Email</label>
							<input type="email" name="email" id="email" placeholder="email@example.com" required>
							<label for="website">Website</label>
							<input type="url" name="website" id="website" placeholder="http://brettanda.ca">
							<label for="message">Message</label>
							<textarea name="message" id="message" cols="30" rows="10" required></textarea>
							<input type="submit" value="Send">
						</form>	 -->
						<?php //print wp_mail("brettanda12@gmail.com", "Subject", "message", "Reply To: wordpress@pi.brettanda.ca"); ?>
					</div>
				</article>
			<?php endwhile; endif; ?>
</main>
<?php //if(get_theme_mod('toggle_sidebar') == 'true'){get_sidebar();} ?>
<?php get_footer();?>   