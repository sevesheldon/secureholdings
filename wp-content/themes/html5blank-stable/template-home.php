<?php get_header(); ?>
<?php /* Template Name: Home Page Template */ get_header(); ?>

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



			<div class="container-fluid menu2-wrap">

				<div class="row menu2">

					<div class="col-sm-4 menu2-item" id="landlords">
						<a class="block menu-2-button" href="<?php the_permalink(45);?>">
						<!-- <h3>Landlords</h3> -->
						<h4 class="description">Are you a landlord<br>who is considering selling?</h4>
						<img src="<?php echo get_template_directory_uri(); ?>/img/oldhousesmaller.jpg" alt="landlords-icon">						
						</a>
					</div>

					<div class="col-sm-4 menu2-item" id="heirs">
						<a class="block menu-2-button" href="<?php the_permalink(47);?>">
						<!-- <h3>Heirs</h3> -->
						<h4 class="description">Are you looking for<br>a quick solution?</h4>
						<img src="<?php echo get_template_directory_uri(); ?>/img/keyandgreenhouse.jpg" alt="heirs-icon">						
						</a>
					</div>

					<div class="col-sm-4 menu2-item" id="downsizing">
						<a class="block menu-2-button" href="<?php the_permalink(49);?>">
						<!-- <h3>Downsizing?</h3> -->
						<h4 class="description">Are you downsizing, helping an<br>aging parent or inheriting property?</h4>
						<img src="<?php echo get_template_directory_uri(); ?>/img/momanddaughtersmaller.jpg" alt="downsizing-icon">						
						</a>
					</div>				

				</div>

			</div>
<!-- 
			<div class="page-content-wrap-2" id="page-content-wrap-home-2">

				<div class="page-content" id="page-content-home-2">

					<?php the_field('content_area_2') ?>

				</div>

			</div> -->

		</section>
		<!-- /section -->

	</main>


<?php get_footer(); ?>
