<?php get_header(); ?>
<?php /* Template Name: New About Page Template */ get_header(); ?>

	<main role="main">

	<?php get_sidebar(); ?>

		<!-- section -->
		<section>

<!-- <img class="headshot" src="<?php echo get_template_directory_uri(); ?>/img/jshel-headshot.jpg"> -->

			<div class="content-wrap" id="page-content-wrap-home">
				<?php 

				$image = get_field('head_shot');
				$image_object = get_field('head_shot');
				$image_size = 'medium';
				$image_url = $image_object['sizes'][$image_size];

				?>

				<div class="headshot">

					<img src="<?php echo $image_url; ?>" alt="<?php echo $image['alt']; ?>" /> 

				</div>

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="page-content" id="page-content-home">

							<?php the_content(); ?>

						</div>

						<br class="clear">

					</article>
					<!-- /article -->

				<?php endwhile; ?>

				<?php else: ?>

				<?php endif; ?>

			</div>	

	</main>


<?php get_footer(); ?>
