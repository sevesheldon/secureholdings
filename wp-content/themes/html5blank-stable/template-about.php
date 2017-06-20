<?php /* Template Name: About Page Template */ get_header(); ?>

<?php get_header(); ?>

	<main role="main">

	<?php get_sidebar(); ?>
		
		<!-- section -->
		<section>

			<div class="content-wrap" id="about-content-wrap">

					<h1><?php the_title(); ?></h1>

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



<?php get_footer(); ?>
