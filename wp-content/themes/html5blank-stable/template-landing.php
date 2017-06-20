<?php /* Template Name: Landing Page Template */ get_header('new'); ?>

<?php get_header('new'); ?>

	<main role="main">
		
		<!-- section -->
		<section>

			<div class="content-wrap" id="landing-content-wrap">

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php the_content(); ?>

						<br class="clear">


					</article>
					<!-- /article -->

				<?php endwhile; ?>

				<?php else: ?>

				<?php endif; ?>

			</div>

		</section>
		<!-- /section -->
	</main>



<?php get_footer('new'); ?>
