<?php /* Template Name: Testimonials Page Template */ get_header(); ?>

<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="content-wrap" id="test-content-wrap">


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


			<div class="testimonials-container">	

				<?php if( have_rows('testimonials') ): ?>
						<?php while( have_rows('testimonials') ): the_row(); 
								$image_object = get_sub_field('image');
								$image_size = 'medium';
								$image_url = $image_object['sizes'][$image_size];
								?>
								
								<div class="testimonial">

		    		    			<img src="<?php echo $image_url; ?>" />
		    		    			
		    		    			<p id="test_text"><?php the_sub_field('testimonial'); ?></p>
		    		    		
									<h3 id="test_name"><?php the_sub_field('name'); ?></h3>
								
								</div>

						<?php endwhile; ?>
				<?php endif; ?>
			</div>


		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
