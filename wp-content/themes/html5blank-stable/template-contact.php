<?php /* Template Name: Contact Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->

	<?php get_sidebar(); ?>

		<section>

			<div class="content-wrap" id="contact-content-wrap">

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


		<?php 

		$image = get_field('call_button');
		$image_object = get_field('call_button');
		$image_size = 'medium';
		$image_url = $image_object['sizes'][$image_size];

		?>

		<div id="contact-under-content">

			<div class="" id="call-button">

				<a href="tel:1-503-539-9094">

					<img src="<?php echo $image_url; ?>" alt="<?php echo $image['alt']; ?>" /> 

				</a>

			</div>

			<div class="contact-form" id="contact-page-form">

				<h3>How May I Be Of Service?</h3>

				<?php echo do_shortcode( '[contact-form-7 id="55" title="Contact"]' ); ?>

			</div>

		</div>

	</main>



<?php get_footer(); ?>
