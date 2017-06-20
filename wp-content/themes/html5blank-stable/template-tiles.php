<?php /* Template Name: Tiles Page Template */ get_header(); ?>

	<main role="main">

	<?php get_sidebar(); ?>

		<!-- section -->
		<section>

		<?php 

		$image = get_field('banner_image');
		$image_object = get_field('banner_image');
		$image_size = 'large';
		$image_url = $image_object['sizes'][$image_size];

		?>

			<div id="banner-button">

				<a href="tel:1-503-539-9094">

					<img src="<?php echo $image_url; ?>" alt="<?php echo $image['alt']; ?>" /> 

				</a>

			</div>

			<div class="content-wrap" id="tiles-content-wrap">
			

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

			<a id="contact-button" href="<?php the_permalink('11') ?>">

				<h3>Contact Us today for a 30-minute consultation. We will make this a simple, straightforward process you can feel good about.</h3>

			</a>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
